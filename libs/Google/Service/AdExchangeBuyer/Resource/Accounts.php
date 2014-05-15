<?php 
namespace Google\Service\AdExchangeBuyer\Resource;
class Accounts extends \Google\Resource\Service
{

  /**
   * Gets one account by ID. (accounts.get)
   *
   * @param int $id
   * The account id
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\Account
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdExchangeBuyer\Account');
  }
  /**
   * Retrieves the authenticated user's list of accounts. (accounts.listAccounts)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\AccountsList
   */
  public function listAccounts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeBuyer\AccountsList');
  }
  /**
   * Updates an existing account. This method supports patch semantics.
   * (accounts.patch)
   *
   * @param int $id
   * The account id
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\Account
   */
  public function patch($id, \Google\Service\AdExchangeBuyer\Account $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\AdExchangeBuyer\Account');
  }
  /**
   * Updates an existing account. (accounts.update)
   *
   * @param int $id
   * The account id
   * @param Google_Account $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\Account
   */
  public function update($id, \Google\Service\AdExchangeBuyer\Account $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\AdExchangeBuyer\Account');
  }
}
