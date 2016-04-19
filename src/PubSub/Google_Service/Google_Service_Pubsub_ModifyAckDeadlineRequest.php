<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_ModifyAckDeadlineRequest extends \Google_Collection
{
    protected $collection_key = 'ackIds';
    protected $internal_gapi_mappings = array(
    );
    public $ackDeadlineSeconds;
    public $ackIds;
    public function setAckDeadlineSeconds($ackDeadlineSeconds)
    {
        $this->ackDeadlineSeconds = $ackDeadlineSeconds;
    }
    public function getAckDeadlineSeconds()
    {
        return $this->ackDeadlineSeconds;
    }
    public function setAckIds($ackIds)
    {
        $this->ackIds = $ackIds;
    }
    public function getAckIds()
    {
        return $this->ackIds;
    }
}