<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_PubsubMessage extends \Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $attributes;
    public $data;
    public $messageId;
    public $publishTime;
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
    public function getAttributes()
    {
        return $this->attributes;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }
    public function getMessageId()
    {
        return $this->messageId;
    }
    public function setPublishTime($publishTime)
    {
        $this->publishTime = $publishTime;
    }
    public function getPublishTime()
    {
        return $this->publishTime;
    }
}