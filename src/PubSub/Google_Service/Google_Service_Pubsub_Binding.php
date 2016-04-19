<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_Binding extends \Google_Collection
{
    protected $collection_key = 'members';
    protected $internal_gapi_mappings = array(
    );
    public $members;
    public $role;
    public function setMembers($members)
    {
        $this->members = $members;
    }
    public function getMembers()
    {
        return $this->members;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }
}