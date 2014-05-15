<?php 
namespace Google\Service\Directory\Resource;
class Users extends \Google\Resource\Service
{

  /**
   * Delete user (users.delete)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   */
  public function delete($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * retrieve user (users.get)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function get($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Directory\User');
  }
  /**
   * create user. (users.insert)
   *
   * @param Google_User $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function insert(\Google\Service\Directory\User $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Directory\User');
  }
  /**
   * Retrieve either deleted users or all users in a domain (paginated)
   * (users.listUsers)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customer
   * Immutable id of the Google Apps account. In case of multi-domain, to fetch all users for a
    * customer, fill this field instead of domain.
   * @opt_param string orderBy
   * Column to use for sorting results
   * @opt_param string domain
   * Name of the domain. Fill this field to get users from only this domain. To return all users in a
    * multi-domain fill customer field instead.
   * @opt_param string showDeleted
   * If set to true retrieves the list of deleted users. Default is false
   * @opt_param int maxResults
   * Maximum number of results to return. Default is 100. Max allowed is 500
   * @opt_param string pageToken
   * Token to specify next page in the list
   * @opt_param string sortOrder
   * Whether to return results in ascending or descending order.
   * @opt_param string query
   * Query string search. Should be of the form "" where field can be any of supported fields,
    * operators can be one of '=' for exact match or ':' for prefix match. For prefix match, the value
    * should always be followed by a *.
   * @opt_param string event
   * Event on which subscription is intended (if subscribing)
   * @return \Google\Service\Directory\Users
   */
  public function listUsers($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\Users');
  }
  /**
   * change admin status of a user (users.makeAdmin)
   *
   * @param string $userKey
   * Email or immutable Id of the user as admin
   * @param Google_UserMakeAdmin $postBody
   * @param array $optParams Optional parameters.
   */
  public function makeAdmin($userKey, \Google\Service\Directory\UserMakeAdmin $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('makeAdmin', array($params));
  }
  /**
   * update user. This method supports patch semantics. (users.patch)
   *
   * @param string $userKey
   * Email or immutable Id of the user. If Id, it should match with id of user object
   * @param Google_User $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function patch($userKey, \Google\Service\Directory\User $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Directory\User');
  }
  /**
   * Undelete a deleted user (users.undelete)
   *
   * @param string $userKey
   * The immutable id of the user
   * @param Google_UserUndelete $postBody
   * @param array $optParams Optional parameters.
   */
  public function undelete($userKey, \Google\Service\Directory\UserUndelete $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('undelete', array($params));
  }
  /**
   * update user (users.update)
   *
   * @param string $userKey
   * Email or immutable Id of the user. If Id, it should match with id of user object
   * @param Google_User $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\User
   */
  public function update($userKey, \Google\Service\Directory\User $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Directory\User');
  }
  /**
   * Watch for changes in users list (users.watch)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customer
   * Immutable id of the Google Apps account. In case of multi-domain, to fetch all users for a
    * customer, fill this field instead of domain.
   * @opt_param string orderBy
   * Column to use for sorting results
   * @opt_param string domain
   * Name of the domain. Fill this field to get users from only this domain. To return all users in a
    * multi-domain fill customer field instead.
   * @opt_param string showDeleted
   * If set to true retrieves the list of deleted users. Default is false
   * @opt_param int maxResults
   * Maximum number of results to return. Default is 100. Max allowed is 500
   * @opt_param string pageToken
   * Token to specify next page in the list
   * @opt_param string sortOrder
   * Whether to return results in ascending or descending order.
   * @opt_param string query
   * Query string search. Should be of the form "" where field can be any of supported fields,
    * operators can be one of '=' for exact match or ':' for prefix match. For prefix match, the value
    * should always be followed by a *.
   * @opt_param string event
   * Event on which subscription is intended (if subscribing)
   * @return \Google\Service\Directory\Channel
   */
  public function watch(\Google\Service\Directory\Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), 'Google\Service\Directory\Channel');
  }
}
