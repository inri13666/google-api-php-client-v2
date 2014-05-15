<?php 
namespace Google\Service\Reports\Resource;
class Activities extends \Google\Resource\Service
{

  /**
   * Retrieves a list of activities for a specific customer and application.
   * (activities.listActivities)
   *
   * @param string $userKey
   * Represents the profile id or the user email for which the data should be filtered. When 'all' is
    * specified as the userKey, it returns usageReports for all users.
   * @param string $applicationName
   * Application name for which the events are to be retrieved.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startTime
   * Return events which occured at or after this time.
   * @opt_param string actorIpAddress
   * IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
   * @opt_param int maxResults
   * Number of activity records to be shown in each page.
   * @opt_param string eventName
   * Name of the event being queried.
   * @opt_param string pageToken
   * Token to specify next page.
   * @opt_param string filters
   * Event parameters in the form [parameter1 name][operator][parameter1 value],[parameter2
    * name][operator][parameter2 value],...
   * @opt_param string endTime
   * Return events which occured at or before this time.
   * @opt_param string customerId
   * Represents the customer for which the data is to be fetched.
   * @return \Google\Service\Reports\Activities
   */
  public function listActivities($userKey, $applicationName, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'applicationName' => $applicationName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Reports\Activities');
  }
  /**
   * Push changes to activities (activities.watch)
   *
   * @param string $userKey
   * Represents the profile id or the user email for which the data should be filtered. When 'all' is
    * specified as the userKey, it returns usageReports for all users.
   * @param string $applicationName
   * Application name for which the events are to be retrieved.
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startTime
   * Return events which occured at or after this time.
   * @opt_param string actorIpAddress
   * IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
   * @opt_param int maxResults
   * Number of activity records to be shown in each page.
   * @opt_param string eventName
   * Name of the event being queried.
   * @opt_param string pageToken
   * Token to specify next page.
   * @opt_param string filters
   * Event parameters in the form [parameter1 name][operator][parameter1 value],[parameter2
    * name][operator][parameter2 value],...
   * @opt_param string endTime
   * Return events which occured at or before this time.
   * @opt_param string customerId
   * Represents the customer for which the data is to be fetched.
   * @return \Google\Service\Reports\Channel
   */
  public function watch($userKey, $applicationName, \Google\Service\Reports\Channel $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'applicationName' => $applicationName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), 'Google\Service\Reports\Channel');
  }
}
