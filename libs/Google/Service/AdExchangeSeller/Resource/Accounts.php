<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class Accounts extends \Google\Resource\Service
{

  /**
   * Get information about the selected Ad Exchange account. (accounts.get)
   *
   * @param string $accountId
   * Account to get information about. Tip: 'myaccount' is a valid ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeSeller\Account
   */
  public function get($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdExchangeSeller\Account');
  }
}
