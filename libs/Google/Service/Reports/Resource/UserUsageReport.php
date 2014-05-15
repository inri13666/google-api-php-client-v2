<?php 
namespace Google\Service\Reports\Resource;
class UserUsageReport extends \Google\Resource\Service
{

  /**
   * Retrieves a report which is a collection of properties / statistics for a set
   * of users. (userUsageReport.get)
   *
   * @param string $userKey
   * Represents the profile id or the user email for which the data should be filtered.
   * @param string $date
   * Represents the date in yyyy-mm-dd format for which the data is to be fetched.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string parameters
   * Represents the application name, parameter name pairs to fetch in csv as app_name1:param_name1,
    * app_name2:param_name2.
   * @opt_param string maxResults
   * Maximum number of results to return. Maximum allowed is 1000
   * @opt_param string pageToken
   * Token to specify next page.
   * @opt_param string filters
   * Represents the set of filters including parameter operator value.
   * @opt_param string customerId
   * Represents the customer for which the data is to be fetched.
   * @return \Google\Service\Reports\UsageReports
   */
  public function get($userKey, $date, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'date' => $date);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Reports\UsageReports');
  }
}
