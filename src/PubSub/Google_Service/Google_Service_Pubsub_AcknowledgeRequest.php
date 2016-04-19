<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_AcknowledgeRequest extends \Google_Collection
{
    protected $collection_key = 'ackIds';
    protected $internal_gapi_mappings = array(
    );
    public $ackIds;
    public function setAckIds($ackIds)
    {
        $this->ackIds = $ackIds;
    }
    public function getAckIds()
    {
        return $this->ackIds;
    }
}