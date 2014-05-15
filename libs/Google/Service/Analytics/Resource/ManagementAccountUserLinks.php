<?php 
namespace Google\Service\Analytics\Resource;
class ManagementAccountUserLinks extends \Google\Resource\Service
{

  /**
   * Removes a user from the given account. (accountUserLinks.delete)
   *
   * @param string $accountId
   * Account ID to delete the user link for.
   * @param string $linkId
   * Link ID to delete the user link for.
   * @param array $optParams Optional parameters.
   */
  public function delete($accountId, $linkId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'linkId' => $linkId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Adds a new user to the given account. (accountUserLinks.insert)
   *
   * @param string $accountId
   * Account ID to create the user link for.
   * @param Google_EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\EntityUserLink
   */
  public function insert($accountId, \Google\Service\Analytics\EntityUserLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Analytics\EntityUserLink');
  }
  /**
   * Lists account-user links for a given account.
   * (accountUserLinks.listManagementAccountUserLinks)
   *
   * @param string $accountId
   * Account ID to retrieve the user links for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of account-user links to include in this response.
   * @opt_param int start-index
   * An index of the first account-user link to retrieve. Use this parameter as a pagination
    * mechanism along with the max-results parameter.
   * @return \Google\Service\Analytics\EntityUserLinks
   */
  public function listManagementAccountUserLinks($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\EntityUserLinks');
  }
  /**
   * Updates permissions for an existing user on the given account.
   * (accountUserLinks.update)
   *
   * @param string $accountId
   * Account ID to update the account-user link for.
   * @param string $linkId
   * Link ID to update the account-user link for.
   * @param Google_EntityUserLink $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Analytics\EntityUserLink
   */
  public function update($accountId, $linkId, \Google\Service\Analytics\EntityUserLink $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'linkId' => $linkId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Analytics\EntityUserLink');
  }
}
