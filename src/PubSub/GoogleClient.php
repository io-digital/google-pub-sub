<?php namespace IoDigital\GooglePubSub\PubSub;

use IoDigital\GooglePubSub\PubSub\Google_Service\Google_Service_Pubsub;

class GoogleClient
{
    /**
     * @var \Google_Client
     * Google Client Instance
     */
    protected $client;
    /**
     * @var string
     * Project Name
     */
    protected $projectName;
    /**
     * @var string
     * Bucket name
     */
    protected $projectBucket;

    /**
     * GoogleServiceProvider constructor.
     * @param $config
     */
    public function __construct()
    {
        $this->client = new \Google_Client();

        $this->projectName = config('google_pub_sub.application');

        $this->authJsonFile = config('google_pub_sub.auth_json_filename');

        $this->client->setApplicationName($this->projectName);

        $this->client->setAuthConfigFile(base_path($this->authJsonFile));

        //THIS IS NEEDED FOR CHROME ENV
        //$this->client->useApplicationDefaultCredentials();

        $this->client->addScope(Google_Service_Pubsub::PUBSUB);
    }

    /**
     * @return \Google_Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getApplicationName()
    {
        return $this->projectName;
    }
}