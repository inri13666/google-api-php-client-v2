<?php 
namespace Google\Service\Books\Resource;
class Promooffer extends \Google\Resource\Service
{

  /**
   * (promooffer.accept)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string product
   * device product
   * @opt_param string volumeId
   * Volume id to exercise the offer
   * @opt_param string offerId
   *
   * @opt_param string androidId
   * device android_id
   * @opt_param string device
   * device device
   * @opt_param string model
   * device model
   * @opt_param string serial
   * device serial
   * @opt_param string manufacturer
   * device manufacturer
   */
  public function accept($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params));
  }
  /**
   * (promooffer.dismiss)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string product
   * device product
   * @opt_param string offerId
   * Offer to dimiss
   * @opt_param string androidId
   * device android_id
   * @opt_param string device
   * device device
   * @opt_param string model
   * device model
   * @opt_param string serial
   * device serial
   * @opt_param string manufacturer
   * device manufacturer
   */
  public function dismiss($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }
  /**
   * Returns a list of promo offers available to the user (promooffer.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string product
   * device product
   * @opt_param string androidId
   * device android_id
   * @opt_param string device
   * device device
   * @opt_param string model
   * device model
   * @opt_param string serial
   * device serial
   * @opt_param string manufacturer
   * device manufacturer
   * @return \Google\Service\Books\Offers
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\Offers');
  }
}
