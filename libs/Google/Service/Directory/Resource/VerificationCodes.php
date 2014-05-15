<?php 
namespace Google\Service\Directory\Resource;
class VerificationCodes extends \Google\Resource\Service
{

  /**
   * Generate new backup verification codes for the user.
   * (verificationCodes.generate)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   */
  public function generate($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('generate', array($params));
  }
  /**
   * Invalidate the current backup verification codes for the user.
   * (verificationCodes.invalidate)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   */
  public function invalidate($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('invalidate', array($params));
  }
  /**
   * Returns the current set of valid backup verification codes for the specified
   * user. (verificationCodes.listVerificationCodes)
   *
   * @param string $userKey
   * Identifies the user in the API request. The value can be the user's primary email address, alias
    * email address, or unique user ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\VerificationCodes
   */
  public function listVerificationCodes($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\VerificationCodes');
  }
}
