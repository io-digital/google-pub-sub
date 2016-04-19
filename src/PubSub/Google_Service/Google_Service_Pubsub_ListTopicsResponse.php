<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_ListTopicsResponse extends \Google_Collection
{
    protected $collection_key = 'topics';
    protected $internal_gapi_mappings = array(
    );
    public $nextPageToken;
    protected $topicsType = 'Google_Service_Pubsub_Topic';
    protected $topicsDataType = 'array';
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setTopics($topics)
    {
        $this->topics = $topics;
    }
    public function getTopics()
    {
        return $this->topics;
    }
}