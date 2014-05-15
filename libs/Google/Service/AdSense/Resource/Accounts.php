<?php 
namespace Google\Service\AdSense\Resource;
class Accounts extends \Google\Resource\Service
{

  /**
   * Get information about the selected AdSense account. (accounts.get)
   *
   * @param string $accountId
   * Account to get information about.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool tree
   * Whether the tree of sub accounts should be returned.
   * @return \Google\Service\AdSense\Account
   */
  public function get($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSense\Account');
  }
  /**
   * List all accounts available to this AdSense account. (accounts.listAccounts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through accounts. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of accounts to include in the response, used for paging.
   * @return \Google\Service\AdSense\Accounts
   */
  public function listAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\Accounts');
  }
}
