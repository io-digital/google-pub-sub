<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_PullResponse extends \Google_Collection
{
    protected $collection_key = 'receivedMessages';
    protected $internal_gapi_mappings = array(
    );
    protected $receivedMessagesType = 'Google_Service_Pubsub_ReceivedMessage';
    protected $receivedMessagesDataType = 'array';
    public function setReceivedMessages($receivedMessages)
    {
        $this->receivedMessages = $receivedMessages;
    }
    public function getReceivedMessages()
    {
        return $this->receivedMessages;
    }
}