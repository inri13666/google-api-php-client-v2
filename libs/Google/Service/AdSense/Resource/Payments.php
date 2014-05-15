<?php 
namespace Google\Service\AdSense\Resource;
class Payments extends \Google\Resource\Service
{

  /**
   * List the payments for this AdSense account. (payments.listPayments)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\Payments
   */
  public function listPayments($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\Payments');
  }
}
