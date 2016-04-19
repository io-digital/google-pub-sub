<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_SetIamPolicyRequest extends \Google_Model
{
    protected $internal_gapi_mappings = array(
    );
    protected $policyType = 'Google_Service_Pubsub_Policy';
    protected $policyDataType = '';
    public function setPolicy(Google_Service_Pubsub_Policy $policy)
    {
        $this->policy = $policy;
    }
    public function getPolicy()
    {
        return $this->policy;
    }
}