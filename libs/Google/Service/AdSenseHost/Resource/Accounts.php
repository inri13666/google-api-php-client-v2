<?php 
namespace Google\Service\AdSenseHost\Resource;
class Accounts extends \Google\Resource\Service
{

  /**
   * Get information about the selected associated AdSense account. (accounts.get)
   *
   * @param string $accountId
   * Account to get information about.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\Account
   */
  public function get($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSenseHost\Account');
  }
  /**
   * List hosted accounts associated with this AdSense account by ad client id.
   * (accounts.listAccounts)
   *
   * @param string $filterAdClientId
   * Ad clients to list accounts for.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\Accounts
   */
  public function listAccounts($filterAdClientId, $optParams = array())
  {
    $params = array('filterAdClientId' => $filterAdClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSenseHost\Accounts');
  }
}
