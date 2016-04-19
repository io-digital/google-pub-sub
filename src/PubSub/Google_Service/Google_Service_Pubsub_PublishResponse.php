<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_PublishResponse extends \Google_Collection
{
    protected $collection_key = 'messageIds';
    protected $internal_gapi_mappings = array(
    );
    public $messageIds;
    public function setMessageIds($messageIds)
    {
        $this->messageIds = $messageIds;
    }
    public function getMessageIds()
    {
        return $this->messageIds;
    }
}