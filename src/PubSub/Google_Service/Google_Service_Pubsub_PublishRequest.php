<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_PublishRequest extends \Google_Collection
{
    protected $collection_key = 'messages';
    protected $internal_gapi_mappings = array(
    );
    protected $messagesType = 'Google_Service_Pubsub_PubsubMessage';
    protected $messagesDataType = 'array';
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
}