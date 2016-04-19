<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;

/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $subscriptions = $pubsubService->subscriptions;
 *  </code>
 */
class Google_Service_Pubsub_ProjectsTopicsSubscriptions_Resource extends \Google_Service_Resource
{
    /**
     * Lists the name of the subscriptions for this topic.
     * (subscriptions.listProjectsTopicsSubscriptions)
     *
     * @param string $topic The name of the topic that subscriptions are attached
     * to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize Maximum number of subscription names to return.
     * @opt_param string pageToken The value returned by the last
     * `ListTopicSubscriptionsResponse`; indicates that this is a continuation of a
     * prior `ListTopicSubscriptions` call, and that the system should return the
     * next page of data.
     * @return Google_Service_Pubsub_ListTopicSubscriptionsResponse
     */
    public function listProjectsTopicsSubscriptions($topic, $optParams = array())
    {
        $params = array('topic' => $topic);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Pubsub_ListTopicSubscriptionsResponse");
    }
}