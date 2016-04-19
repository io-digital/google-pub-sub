<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_TestIamPermissionsResponse extends \Google_Collection
{
    protected $collection_key = 'permissions';
    protected $internal_gapi_mappings = array(
    );
    public $permissions;
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }
    public function getPermissions()
    {
        return $this->permissions;
    }
}