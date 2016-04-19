<?php namespace IoDigital\GooglePubSub\PubSub;

use IoDigital\GooglePubSub\PubSub\Google_Service\Google_Service_Pubsub;
use IoDigital\GooglePubSub\PubSub\Google_Service\Google_Service_Pubsub_PublishRequest;
use IoDigital\GooglePubSub\PubSub\Google_Service\Google_Service_Pubsub_PubsubMessage;

class PubSubHandler
{
    protected $googlePubSubService;
    protected $google_client;

    protected $topicStub;
    protected $subStub;
    protected $pubStub;
    /**
     * PubSub constructor.
     */
    public function __construct(GoogleClient $googleClient)
    {
        $this->topicStub = 'projects/'. $googleClient->getApplicationName() .'/topics/';

        $this->subStub = 'projects/'. $googleClient->getApplicationName() .'/subscriptions/';
        $this->pubStub = 'projects/'. $googleClient->getApplicationName() .'/topics/';

        $this->google_client = $googleClient->getClient();
        $this->googlePubSubService = new Google_Service_Pubsub($this->google_client);
    }

    public function subToTopic($topic, $subName)
    {
        $subService = $this->googlePubSubService->projects_subscriptions;

        $sub = new \Google_Service_Pubsub_Subscription();

        $sub->setName($subName);
        //projects/io-anvil/topics/media-update
        $sub->setTopic($this->topicStub . $topic);

        //projects/io-anvil/subscriptions/sub-23
        $subService->create($this->subStub . $subName,$sub);

        return true;
    }

    public function createTopic($topicName)
    {
        $subService = $this->googlePubSubService->projects_subscriptions;

        $topic = new \Google_Service_Pubsub_Subscription();

        $subService->create($this->subName . $topicName,$topic);

        return true;
    }

    public function publishToTopic($topicName, $messages)
    {
        $topicsService = $this->googlePubSubService->projects_topics;

        $googleServicePubSubPublishRequest = new Google_Service_Pubsub_PublishRequest();

        $message = new Google_Service_Pubsub_PubsubMessage();

        $message->setData($messages);

        $googleServicePubSubPublishRequest->setMessages($message);

        $topicsService->publish($this->pubStub . $topicName, $googleServicePubSubPublishRequest);

        return true;
    }
}