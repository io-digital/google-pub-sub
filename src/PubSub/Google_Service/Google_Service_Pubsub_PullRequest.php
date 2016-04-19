<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_PullRequest extends \Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $maxMessages;
    public $returnImmediately;
    public function setMaxMessages($maxMessages)
    {
        $this->maxMessages = $maxMessages;
    }
    public function getMaxMessages()
    {
        return $this->maxMessages;
    }
    public function setReturnImmediately($returnImmediately)
    {
        $this->returnImmediately = $returnImmediately;
    }
    public function getReturnImmediately()
    {
        return $this->returnImmediately;
    }
}