<?php 
namespace Google\Service\Analytics\Resource;
class ManagementAccountSummaries extends \Google\Resource\Service
{

  /**
   * Lists account summaries (lightweight tree comprised of
   * accounts/properties/profiles) to which the user has access.
   * (accountSummaries.listManagementAccountSummaries)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of filters to include in this response.
   * @opt_param int start-index
   * An index of the first entity to retrieve. Use this parameter as a pagination mechanism along
    * with the max-results parameter.
   * @return \Google\Service\Analytics\AccountSummaries
   */
  public function listManagementAccountSummaries($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\AccountSummaries');
  }
}
