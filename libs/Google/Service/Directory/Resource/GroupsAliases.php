<?php 
namespace Google\Service\Directory\Resource;
class GroupsAliases extends \Google\Resource\Service
{

  /**
   * Remove a alias for the group (aliases.delete)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param string $alias
   * The alias to be removed
   * @param array $optParams Optional parameters.
   */
  public function delete($groupKey, $alias, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'alias' => $alias);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Add a alias for the group (aliases.insert)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param Google_Alias $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Alias
   */
  public function insert($groupKey, \Google\Service\Directory\Alias $postBody, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Directory\Alias');
  }
  /**
   * List all aliases for a group (aliases.listGroupsAliases)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Aliases
   */
  public function listGroupsAliases($groupKey, $optParams = array())
  {
    $params = array('groupKey' => $groupKey);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\Aliases');
  }
}
