<?php 
namespace Google\Service\Analytics\Resource;
class ManagementAccounts extends \Google\Resource\Service
{

  /**
   * Lists all accounts to which the user has access.
   * (accounts.listManagementAccounts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of accounts to include in this response.
   * @opt_param int start-index
   * An index of the first account to retrieve. Use this parameter as a pagination mechanism along
    * with the max-results parameter.
   * @return \Google\Service\Analytics\Accounts
   */
  public function listManagementAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\Accounts');
  }
}
