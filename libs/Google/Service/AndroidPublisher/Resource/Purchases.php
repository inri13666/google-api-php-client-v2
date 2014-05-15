<?php 
namespace Google\Service\AndroidPublisher\Resource;
class Purchases extends \Google\Resource\Service
{

  /**
   * Cancels a user's subscription purchase. The subscription remains valid until
   * its expiration time. (purchases.cancel)
   *
   * @param string $packageName
   * The package name of the application for which this subscription was purchased (for example,
    * 'com.some.thing').
   * @param string $subscriptionId
   * The purchased subscription ID (for example, 'monthly001').
   * @param string $token
   * The token provided to the user's device when the subscription was purchased.
   * @param array $optParams Optional parameters.
   */
  public function cancel($packageName, $subscriptionId, $token, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token);
    $params = array_merge($params, $optParams);
    return $this->call('cancel', array($params));
  }
  /**
   * Checks whether a user's subscription purchase is valid and returns its expiry
   * time. (purchases.get)
   *
   * @param string $packageName
   * The package name of the application for which this subscription was purchased (for example,
    * 'com.some.thing').
   * @param string $subscriptionId
   * The purchased subscription ID (for example, 'monthly001').
   * @param string $token
   * The token provided to the user's device when the subscription was purchased.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AndroidPublisher\SubscriptionPurchase
   */
  public function get($packageName, $subscriptionId, $token, $optParams = array())
  {
    $params = array('packageName' => $packageName, 'subscriptionId' => $subscriptionId, 'token' => $token);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AndroidPublisher\SubscriptionPurchase');
  }
}
