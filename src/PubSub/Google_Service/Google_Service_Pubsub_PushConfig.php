<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_PushConfig extends \Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    public $attributes;
    public $pushEndpoint;
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
    public function getAttributes()
    {
        return $this->attributes;
    }
    public function setPushEndpoint($pushEndpoint)
    {
        $this->pushEndpoint = $pushEndpoint;
    }
    public function getPushEndpoint()
    {
        return $this->pushEndpoint;
    }
}