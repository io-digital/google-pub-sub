<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_Policy extends \Google_Collection
{
    protected $collection_key = 'bindings';
    protected $internal_gapi_mappings = array(
    );
    protected $bindingsType = 'Google_Service_Pubsub_Binding';
    protected $bindingsDataType = 'array';
    public $etag;
    public $version;
    public function setBindings($bindings)
    {
        $this->bindings = $bindings;
    }
    public function getBindings()
    {
        return $this->bindings;
    }
    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
    public function getEtag()
    {
        return $this->etag;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}