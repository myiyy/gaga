<?php


/**
 *
 * Help Ide Code AutoComplement
 *
 * @property File_Manager File_Manager
 * @property Site_Login Site_Login
 * @property SiteConfig SiteConfig
 * @property Site_Config Site_Config
 * @property Site_Default Site_Default
 *
 * @property SiteConfigTable SiteConfigTable
 * @property SiteSessionTable SiteSessionTable
 * @property SiteUserTable SiteUserTable
 * @property PassportPasswordTable PassportPasswordTable
 * @property PassportPasswordTokenTable PassportPasswordTokenTable
 * @property  PassportPasswordPreSessionTable PassportPasswordPreSessionTable
 * @property SiteUserFriendTable SiteUserFriendTable
 * @property SiteFriendApplyTable SiteFriendApplyTable
 * @property SiteU2MessageTable SiteU2MessageTable
 * @property SiteGroupTable SiteGroupTable
 * @property SiteGroupUserTable SiteGroupUserTable
 * @property SiteGroupMessageTable SiteGroupMessageTable
 * @property SiteUicTable SiteUicTable
 * @property SitePluginTable SitePluginTable
 *
 * @property Message_Client Message_Client
 * @property Message_News Message_News
 * @property Push_Client Push_Client
 * @property Gateway_Client Gateway_Client
 * @property Wpf_Logger Wpf_Logger
 * @property ZalyCurl ZalyCurl
 * @property ZalyRsa ZalyRsa
 * @property ZalyAes ZalyAes
 * @property ZalyHelper ZalyHelper
 *
 * @property Pinyin Pinyin
 *
 */
class BaseCtx extends Wpf_Ctx
{
    private $logger;
    public $dbType;
    private $_dbName = "openzalySiteDB.sqlite3";
    private $_dbPath = ".";

    public $db;

    public function __construct()
    {
        $this->logger = new Wpf_Logger();
        $this->loadDatabase();
    }

    // 加载数据库
    private function loadDatabase()
    {
        $this->dbType = ZalyConfig::getConfig("dbType");
        try {
            if (empty($this->dbType)) {
                $this->dbType = "sqlite";
            }
            switch ($this->dbType) {
                case "sqlite":
                    $sqliteConfig = ZalyConfig::getConfig("sqlite");
                    $this->_dbName = $sqliteConfig['sqliteDBName'];

                    if (empty($this->_dbName) || !file_exists(dirname(__FILE__) . "/../" . $this->_dbName)) {
                        throw new Exception("sqlite db file is not exist");
                    }

                    $dbInfo = $this->_dbPath . "/" . $this->_dbName;
                    $this->db = new \PDO("sqlite:{$dbInfo}");
                    break;
                case "mysql":
                    $mysqlConfig = ZalyConfig::getConfig("mysql");
                    $dbName = $mysqlConfig['dbName'];
                    $dbHost = $mysqlConfig['dbHost'];
                    $dbPort = $mysqlConfig['dbPort'];
                    $dbUserName = $mysqlConfig['dbUserName'];
                    $dbPwssword = $mysqlConfig['dbPassword'];
                    $dbDsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;";

                    $options = array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
//                        PDO::ATTR_PERSISTENT => true,
                    );
                    try {
                        $this->db = new \PDO($dbDsn, $dbUserName, $dbPwssword, $options);//创建一个pdo对象
                    } catch (Exception $ex) {
                        throw new Exception($ex->getMessage());
                    }

                    break;
            }
        } catch (Exception $e) {
            $this->logger->error("BaseCtx", $e);
        }

    }

    public function getLogger()
    {
        return $this->logger;
    }

    public function isMysqlDB()
    {
        return isset($this->dbTypeb) && $this->dbType == "mysql";
    }

}
