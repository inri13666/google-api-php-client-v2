<?php 
namespace Google\Service\AndroidPublisher\Resource;
class Inapppurchases extends \Google\Resource\Service
{

  /**
   * Checks the purchase and consumption status of an inapp item.
   * (inapppurchases.get)
   *
   * @param string $packageName
   * The package name of the application the inapp product was sold in (for example,
    * 'com.some.thing').
   * @param string $productId
   * The inapp product SKU (for example, 'com.some.thing.inapp1').
   * @param string $token
   * The token provided to the user's device when the inapp product was purchased.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AndroidPublisher\InappPurchase
   */
  public function get($packageName, $productId, $token, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'productId' => $productId, 'token' => $token);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AndroidPublisher\InappPurchase');
  }
}
