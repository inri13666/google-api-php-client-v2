<?php 
namespace Google\Service\AdSense\Resource;
class AccountsPayments extends \Google\Resource\Service
{

  /**
   * List the payments for the specified AdSense account.
   * (payments.listAccountsPayments)
   *
   * @param string $accountId
   * Account for which to retrieve the payments.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\Payments
   */
  public function listAccountsPayments($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\Payments');
  }
}
