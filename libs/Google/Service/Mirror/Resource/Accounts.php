<?php 
namespace Google\Service\Mirror\Resource;
class Accounts extends \Google\Resource\Service
{

  /**
   * Inserts a new account for a user (accounts.insert)
   *
   * @param string $userToken
   * The ID for the user.
   * @param string $accountType
   * Account type to be passed to Android Account Manager.
   * @param string $accountName
   * The name of the account to be passed to the Android Account Manager.
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Account
   */
  public function insert($userToken, $accountType, $accountName, \Google\Service\Mirror\Account $postBody, $optParams = array())
  {
    $params = array('userToken' => $userToken, 'accountType' => $accountType, 'accountName' => $accountName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Mirror\Account');
  }
}
