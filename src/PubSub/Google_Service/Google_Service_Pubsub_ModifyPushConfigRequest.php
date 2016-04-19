<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_ModifyPushConfigRequest extends \Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $pushConfigType = 'Google_Service_Pubsub_PushConfig';
    protected $pushConfigDataType = '';
    public function setPushConfig(Google_Service_Pubsub_PushConfig $pushConfig)
    {
        $this->pushConfig = $pushConfig;
    }
    public function getPushConfig()
    {
        return $this->pushConfig;
    }
}