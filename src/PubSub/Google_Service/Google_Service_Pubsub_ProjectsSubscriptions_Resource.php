<?php namespace IoDigital\GooglePubSub\PubSub\Google_Service;
/**
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pubsubService = new Google_Service_Pubsub(...);
 *   $subscriptions = $pubsubService->subscriptions;
 *  </code>
 */
class Google_Service_Pubsub_ProjectsSubscriptions_Resource extends \Google_Service_Resource
{
    /**
     * Acknowledges the messages associated with the `ack_ids` in the
     * `AcknowledgeRequest`. The Pub/Sub system can remove the relevant messages
     * from the subscription. Acknowledging a message whose ack deadline has expired
     * may succeed, but such a message may be redelivered later. Acknowledging a
     * message more than once will not result in an error.
     * (subscriptions.acknowledge)
     *
     * @param string $subscription The subscription whose message is being
     * acknowledged.
     * @param Google_AcknowledgeRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function acknowledge($subscription, Google_Service_Pubsub_AcknowledgeRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('acknowledge', array($params), "Google_Service_Pubsub_Empty");
    }
    /**
     * Creates a subscription to a given topic for a given subscriber. If the
     * subscription already exists, returns `ALREADY_EXISTS`. If the corresponding
     * topic doesn't exist, returns `NOT_FOUND`. If the name is not provided in the
     * request, the server will assign a random name for this subscription on the
     * same project as the topic. (subscriptions.create)
     *
     * @param string $name The name of the subscription. It must have the format
     * `"projects/{project}/subscriptions/{subscription}"`. `{subscription}` must
     * start with a letter, and contain only letters (`[A-Za-z]`), numbers
     * (`[0-9]`), dashes (`-`), underscores (`_`), periods (`.`), tildes (`~`), plus
     * (`+`) or percent signs (`%`). It must be between 3 and 255 characters in
     * length, and it must not start with `"goog"`.
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Subscription
     */
    public function create($name, \Google_Service_Pubsub_Subscription $postBody, $optParams = array())
    {
        $params = array('name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('create', array($params), "Google_Service_Pubsub_Subscription");
    }
    /**
     * Deletes an existing subscription. All pending messages in the subscription
     * are immediately dropped. Calls to `Pull` after deletion will return
     * `NOT_FOUND`. After a subscription is deleted, a new one may be created with
     * the same name, but the new one has no association with the old subscription,
     * or its topic unless the same topic is specified. (subscriptions.delete)
     *
     * @param string $subscription The subscription to delete.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function delete($subscription, $optParams = array())
    {
        $params = array('subscription' => $subscription);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Pubsub_Empty");
    }
    /**
     * Gets the configuration details of a subscription. (subscriptions.get)
     *
     * @param string $subscription The name of the subscription to get.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Subscription
     */
    public function get($subscription, $optParams = array())
    {
        $params = array('subscription' => $subscription);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Pubsub_Subscription");
    }
    /**
     * Gets the access control policy for a `resource`. Is empty if the policy or
     * the resource does not exist. (subscriptions.getIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which policy is being
     * requested. `resource` is usually specified as a path, such as,
     * `projects/{project}/zones/{zone}/disks/{disk}`. The format for the path
     * specified in this value is resource specific and is specified in the
     * documentation for the respective GetIamPolicy rpc.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Policy
     */
    public function getIamPolicy($resource, $optParams = array())
    {
        $params = array('resource' => $resource);
        $params = array_merge($params, $optParams);
        return $this->call('getIamPolicy', array($params), "Google_Service_Pubsub_Policy");
    }
    /**
     * Lists matching subscriptions. (subscriptions.listProjectsSubscriptions)
     *
     * @param string $project The name of the cloud project that subscriptions
     * belong to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int pageSize Maximum number of subscriptions to return.
     * @opt_param string pageToken The value returned by the last
     * `ListSubscriptionsResponse`; indicates that this is a continuation of a prior
     * `ListSubscriptions` call, and that the system should return the next page of
     * data.
     * @return Google_Service_Pubsub_ListSubscriptionsResponse
     */
    public function listProjectsSubscriptions($project, $optParams = array())
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Pubsub_ListSubscriptionsResponse");
    }
    /**
     * Modifies the ack deadline for a specific message. This method is useful to
     * indicate that more time is needed to process a message by the subscriber, or
     * to make the message available for redelivery if the processing was
     * interrupted. (subscriptions.modifyAckDeadline)
     *
     * @param string $subscription The name of the subscription.
     * @param Google_ModifyAckDeadlineRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function modifyAckDeadline($subscription, Google_Service_Pubsub_ModifyAckDeadlineRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('modifyAckDeadline', array($params), "Google_Service_Pubsub_Empty");
    }
    /**
     * Modifies the `PushConfig` for a specified subscription. This may be used to
     * change a push subscription to a pull one (signified by an empty `PushConfig`)
     * or vice versa, or change the endpoint URL and other attributes of a push
     * subscription. Messages will accumulate for delivery continuously through the
     * call regardless of changes to the `PushConfig`.
     * (subscriptions.modifyPushConfig)
     *
     * @param string $subscription The name of the subscription.
     * @param Google_ModifyPushConfigRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Empty
     */
    public function modifyPushConfig($subscription, Google_Service_Pubsub_ModifyPushConfigRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('modifyPushConfig', array($params), "Google_Service_Pubsub_Empty");
    }
    /**
     * Pulls messages from the server. Returns an empty list if there are no
     * messages available in the backlog. The server may return `UNAVAILABLE` if
     * there are too many concurrent pull requests pending for the given
     * subscription. (subscriptions.pull)
     *
     * @param string $subscription The subscription from which messages should be
     * pulled.
     * @param Google_PullRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_PullResponse
     */
    public function pull($subscription, Google_Service_Pubsub_PullRequest $postBody, $optParams = array())
    {
        $params = array('subscription' => $subscription, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('pull', array($params), "Google_Service_Pubsub_PullResponse");
    }
    /**
     * Sets the access control policy on the specified resource. Replaces any
     * existing policy. (subscriptions.setIamPolicy)
     *
     * @param string $resource REQUIRED: The resource for which policy is being
     * specified. `resource` is usually specified as a path, such as,
     * `projects/{project}/zones/{zone}/disks/{disk}`. The format for the path
     * specified in this value is resource specific and is specified in the
     * documentation for the respective SetIamPolicy rpc.
     * @param Google_SetIamPolicyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_Policy
     */
    public function setIamPolicy($resource, Google_Service_Pubsub_SetIamPolicyRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setIamPolicy', array($params), "Google_Service_Pubsub_Policy");
    }
    /**
     * Returns permissions that a caller has on the specified resource.
     * (subscriptions.testIamPermissions)
     *
     * @param string $resource REQUIRED: The resource for which policy detail is
     * being requested. `resource` is usually specified as a path, such as,
     * `projects/{project}/zones/{zone}/disks/{disk}`. The format for the path
     * specified in this value is resource specific and is specified in the
     * documentation for the respective TestIamPermissions rpc.
     * @param Google_TestIamPermissionsRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Pubsub_TestIamPermissionsResponse
     */
    public function testIamPermissions($resource, Google_Service_Pubsub_TestIamPermissionsRequest $postBody, $optParams = array())
    {
        $params = array('resource' => $resource, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('testIamPermissions', array($params), "Google_Service_Pubsub_TestIamPermissionsResponse");
    }
}