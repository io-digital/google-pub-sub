<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_ReceivedMessage extends \Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $ackId;
    protected $messageType = 'Google_Service_Pubsub_PubsubMessage';
    protected $messageDataType = '';
    public function setAckId($ackId)
    {
        $this->ackId = $ackId;
    }
    public function getAckId()
    {
        return $this->ackId;
    }
    public function setMessage(\Google_Service_Pubsub_PubsubMessage $message)
    {
        $this->message = $message;
    }
    public function getMessage()
    {
        return $this->message;
    }
}