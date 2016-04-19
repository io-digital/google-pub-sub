<?php namespace IoDigital\GooglePubSub\PubSub;

use IoDigital\GooglePubSub\PubSub\Google_Service\Google_Service_Pubsub;

class PubSubHandler
{
    protected $googlePubSubService;
    protected $google_client;

    protected $project_id;
    protected $project_topic;

    protected $topicStub;
    protected $subStub;
    /**
     * PubSub constructor.
     */
    public function __construct(GoogleClient $googleClient)
    {
        $this->topicStub = 'projects/'. $googleClient->getApplicationName() .'/topics/';
        $this->subStub = 'projects/'. $googleClient->getApplicationName() .'/subscriptions/';

        $this->google_client = $googleClient->getClient();
        $this->googlePubSubService = new Google_Service_Pubsub($this->google_client);
    }

    public function subToTopic($topic,$subName)
    {
        $subService = $this->googlePubSubService->projects_subscriptions;

        $sub = new \Google_Service_Pubsub_Subscription();

        $sub->setName($subName);
        //projects/io-anvil/topics/media-update
        $sub->setTopic($this->topicStub . $topic);

        //projects/io-anvil/subscriptions/sub-23
        $subService->create($this->subStub . $subName,$sub);
    }

    public function createTopic($topicName)
    {
        $subService = $this->googlePubSubService->projects_subscriptions;

        $topic = new \Google_Service_Pubsub_Subscription();

        $subService->create($this->subName . $topicName,$topic);
    }
}