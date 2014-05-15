<?php 
namespace Google\Service\AdSenseHost\Resource;
class Associationsessions extends \Google\Resource\Service
{

  /**
   * Create an association session for initiating an association with an AdSense
   * user. (associationsessions.start)
   *
   * @param string $productCode
   * Products to associate with the user.
   * @param string $websiteUrl
   * The URL of the user's hosted website.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string websiteLocale
   * The locale of the user's hosted website.
   * @opt_param string userLocale
   * The preferred locale of the user.
   * @return \Google\Service\AdSenseHost\AssociationSession
   */
  public function start($productCode, $websiteUrl, $optParams = array())
  {
    $params = array('productCode' => $productCode, 'websiteUrl' => $websiteUrl);
    $params = array_merge($params, $optParams);
    return $this->call('start', array($params), 'Google\Service\AdSenseHost\AssociationSession');
  }
  /**
   * Verify an association session after the association callback returns from
   * AdSense signup. (associationsessions.verify)
   *
   * @param string $token
   * The token returned to the association callback URL.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\AssociationSession
   */
  public function verify($token, $optParams = array())
  {
    $params = array('token' => $token);
    $params = array_merge($params, $optParams);
    return $this->call('verify', array($params), 'Google\Service\AdSenseHost\AssociationSession');
  }
}
