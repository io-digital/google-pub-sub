<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_Subscription extends \Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $ackDeadlineSeconds;
    public $name;
    protected $pushConfigType = 'Google_Service_Pubsub_PushConfig';
    protected $pushConfigDataType = '';
    public $topic;
    public function setAckDeadlineSeconds($ackDeadlineSeconds)
    {
        $this->ackDeadlineSeconds = $ackDeadlineSeconds;
    }
    public function getAckDeadlineSeconds()
    {
        return $this->ackDeadlineSeconds;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPushConfig(\Google_Service_Pubsub_PushConfig $pushConfig)
    {
        $this->pushConfig = $pushConfig;
    }
    public function getPushConfig()
    {
        return $this->pushConfig;
    }
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }
    public function getTopic()
    {
        return $this->topic;
    }
}