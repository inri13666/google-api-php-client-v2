<?php 
namespace Google\Service\Audit\Resource;
class Activities extends \Google\Resource\Service
{

  /**
   * Retrieves a list of activities for a specific customer and application.
   * (activities.listActivities)
   *
   * @param string $customerId
   * Represents the customer who is the owner of target object on which action was performed.
   * @param string $applicationId
   * Application ID of the application on which the event was performed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string actorEmail
   * Email address of the user who performed the action.
   * @opt_param string actorApplicationId
   * Application ID of the application which interacted on behalf of the user while performing the
    * event.
   * @opt_param string actorIpAddress
   * IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
   * @opt_param string caller
   * Type of the caller.
   * @opt_param int maxResults
   * Number of activity records to be shown in each page.
   * @opt_param string eventName
   * Name of the event being queried.
   * @opt_param string startTime
   * Return events which occured at or after this time.
   * @opt_param string endTime
   * Return events which occured at or before this time.
   * @opt_param string continuationToken
   * Next page URL.
   * @return \Google\Service\Audit\Activities
   */
  public function listActivities($customerId, $applicationId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Audit\Activities');
  }
}
