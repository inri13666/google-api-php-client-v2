<?php 
namespace Google\Service\Directory\Resource;
class UsersAliases extends \Google\Resource\Service
{

  /**
   * Remove a alias for the user (aliases.delete)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param string $alias
   * The alias to be removed
   * @param array $optParams Optional parameters.
   */
  public function delete($userKey, $alias, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'alias' => $alias);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Add a alias for the user (aliases.insert)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param Google_Alias $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Alias
   */
  public function insert($userKey, \Google\Service\Directory\Alias $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Directory\Alias');
  }
  /**
   * List all aliases for a user (aliases.listUsersAliases)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param array $optParams Optional parameters.
   *
   * @opt_param string event
   * Event on which subscription is intended (if subscribing)
   * @return \Google\Service\Directory\Aliases
   */
  public function listUsersAliases($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\Aliases');
  }
  /**
   * Watch for changes in user aliases list (aliases.watch)
   *
   * @param string $userKey
   * Email or immutable Id of the user
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string event
   * Event on which subscription is intended (if subscribing)
   * @return \Google\Service\Directory\Channel
   */
  public function watch($userKey, \Google\Service\Directory\Channel $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), 'Google\Service\Directory\Channel');
  }
}
