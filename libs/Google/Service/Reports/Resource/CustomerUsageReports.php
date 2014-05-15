<?php 
namespace Google\Service\Reports\Resource;
class CustomerUsageReports extends \Google\Resource\Service
{

  /**
   * Retrieves a report which is a collection of properties / statistics for a
   * specific customer. (customerUsageReports.get)
   *
   * @param string $date
   * Represents the date in yyyy-mm-dd format for which the data is to be fetched.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token to specify next page.
   * @opt_param string customerId
   * Represents the customer for which the data is to be fetched.
   * @opt_param string parameters
   * Represents the application name, parameter name pairs to fetch in csv as app_name1:param_name1,
    * app_name2:param_name2.
   * @return \Google\Service\Reports\UsageReports
   */
  public function get($date, $optParams = array())
  {
    $params = array('date' => $date);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Reports\UsageReports');
  }
}
