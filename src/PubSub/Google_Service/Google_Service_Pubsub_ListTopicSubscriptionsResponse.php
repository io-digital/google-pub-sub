<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

class Google_Service_Pubsub_ListTopicSubscriptionsResponse extends \Google_Collection
{
    protected $collection_key = 'subscriptions';
    protected $internal_gapi_mappings = array(
    );
    public $nextPageToken;
    public $subscriptions;
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setSubscriptions($subscriptions)
    {
        $this->subscriptions = $subscriptions;
    }
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
}