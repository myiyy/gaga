<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/message.proto

namespace Zaly\Proto\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>core.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * basic info
     *
     * Generated from protobuf field <code>string msgId = 1;</code>
     */
    private $msgId = '';
    /**
     * Generated from protobuf field <code>string fromUserId = 2;</code>
     */
    private $fromUserId = '';
    /**
     * Generated from protobuf field <code>int64 pointer = 3;</code>
     */
    private $pointer = 0;
    /**
     * Generated from protobuf field <code>int64 timeServer = 4;</code>
     */
    private $timeServer = 0;
    /**
     * type info
     *
     * Generated from protobuf field <code>.core.MessageRoomType roomType = 5;</code>
     */
    private $roomType = 0;
    /**
     * body info
     *
     * Generated from protobuf field <code>.core.MessageType type = 8;</code>
     */
    private $type = 0;
    /**
     * reverts 15-50
     *
     * Generated from protobuf field <code>bool treatPointerAsU2Pointer = 51;</code>
     */
    private $treatPointerAsU2Pointer = false;
    protected $toRoom;
    protected $maybe;

    public function __construct() {
        \GPBMetadata\Core\Message::initOnce();
        parent::__construct();
    }

    /**
     * basic info
     *
     * Generated from protobuf field <code>string msgId = 1;</code>
     * @return string
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * basic info
     *
     * Generated from protobuf field <code>string msgId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMsgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->msgId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fromUserId = 2;</code>
     * @return string
     */
    public function getFromUserId()
    {
        return $this->fromUserId;
    }

    /**
     * Generated from protobuf field <code>string fromUserId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFromUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fromUserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 pointer = 3;</code>
     * @return int|string
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * Generated from protobuf field <code>int64 pointer = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPointer($var)
    {
        GPBUtil::checkInt64($var);
        $this->pointer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timeServer = 4;</code>
     * @return int|string
     */
    public function getTimeServer()
    {
        return $this->timeServer;
    }

    /**
     * Generated from protobuf field <code>int64 timeServer = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeServer($var)
    {
        GPBUtil::checkInt64($var);
        $this->timeServer = $var;

        return $this;
    }

    /**
     * type info
     *
     * Generated from protobuf field <code>.core.MessageRoomType roomType = 5;</code>
     * @return int
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * type info
     *
     * Generated from protobuf field <code>.core.MessageRoomType roomType = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRoomType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\MessageRoomType::class);
        $this->roomType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string toUserId = 6;</code>
     * @return string
     */
    public function getToUserId()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>string toUserId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setToUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>string toGroupId = 7;</code>
     * @return string
     */
    public function getToGroupId()
    {
        return $this->readOneof(7);
    }

    /**
     * Generated from protobuf field <code>string toGroupId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setToGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * body info
     *
     * Generated from protobuf field <code>.core.MessageType type = 8;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * body info
     *
     * Generated from protobuf field <code>.core.MessageType type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\MessageType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.TextMessage text = 9;</code>
     * @return \Zaly\Proto\Core\TextMessage
     */
    public function getText()
    {
        return $this->readOneof(9);
    }

    /**
     * Generated from protobuf field <code>.core.TextMessage text = 9;</code>
     * @param \Zaly\Proto\Core\TextMessage $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\TextMessage::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.ImageMessage image = 10;</code>
     * @return \Zaly\Proto\Core\ImageMessage
     */
    public function getImage()
    {
        return $this->readOneof(10);
    }

    /**
     * Generated from protobuf field <code>.core.ImageMessage image = 10;</code>
     * @param \Zaly\Proto\Core\ImageMessage $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\ImageMessage::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.AudioMessage audio = 11;</code>
     * @return \Zaly\Proto\Core\AudioMessage
     */
    public function getAudio()
    {
        return $this->readOneof(11);
    }

    /**
     * Generated from protobuf field <code>.core.AudioMessage audio = 11;</code>
     * @param \Zaly\Proto\Core\AudioMessage $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\AudioMessage::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.WebMessage web = 12;</code>
     * @return \Zaly\Proto\Core\WebMessage
     */
    public function getWeb()
    {
        return $this->readOneof(12);
    }

    /**
     * Generated from protobuf field <code>.core.WebMessage web = 12;</code>
     * @param \Zaly\Proto\Core\WebMessage $var
     * @return $this
     */
    public function setWeb($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\WebMessage::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.StatusMessage status = 13;</code>
     * @return \Zaly\Proto\Core\StatusMessage
     */
    public function getStatus()
    {
        return $this->readOneof(13);
    }

    /**
     * Generated from protobuf field <code>.core.StatusMessage status = 13;</code>
     * @param \Zaly\Proto\Core\StatusMessage $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\StatusMessage::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.NoticeMessage notice = 14;</code>
     * @return \Zaly\Proto\Core\NoticeMessage
     */
    public function getNotice()
    {
        return $this->readOneof(14);
    }

    /**
     * Generated from protobuf field <code>.core.NoticeMessage notice = 14;</code>
     * @param \Zaly\Proto\Core\NoticeMessage $var
     * @return $this
     */
    public function setNotice($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\NoticeMessage::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.WebNoticeMessage webNotice = 15;</code>
     * @return \Zaly\Proto\Core\WebNoticeMessage
     */
    public function getWebNotice()
    {
        return $this->readOneof(15);
    }

    /**
     * Generated from protobuf field <code>.core.WebNoticeMessage webNotice = 15;</code>
     * @param \Zaly\Proto\Core\WebNoticeMessage $var
     * @return $this
     */
    public function setWebNotice($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\WebNoticeMessage::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * reverts 15-50
     *
     * Generated from protobuf field <code>bool treatPointerAsU2Pointer = 51;</code>
     * @return bool
     */
    public function getTreatPointerAsU2Pointer()
    {
        return $this->treatPointerAsU2Pointer;
    }

    /**
     * reverts 15-50
     *
     * Generated from protobuf field <code>bool treatPointerAsU2Pointer = 51;</code>
     * @param bool $var
     * @return $this
     */
    public function setTreatPointerAsU2Pointer($var)
    {
        GPBUtil::checkBool($var);
        $this->treatPointerAsU2Pointer = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getToRoom()
    {
        return $this->whichOneof("toRoom");
    }

    /**
     * @return string
     */
    public function getMaybe()
    {
        return $this->whichOneof("maybe");
    }

}

