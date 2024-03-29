<?php 
namespace Google\Service\Directory\Resource;
class Members extends \Google\Resource\Service
{

  /**
   * Remove membership. (members.delete)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param string $memberKey
   * Email or immutable Id of the member
   * @param array $optParams Optional parameters.
   */
  public function delete($groupKey, $memberKey, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieve Group Member (members.get)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param string $memberKey
   * Email or immutable Id of the member
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Member
   */
  public function get($groupKey, $memberKey, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Directory\Member');
  }
  /**
   * Add user to the specified group. (members.insert)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param Google_Member $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Member
   */
  public function insert($groupKey, \Google\Service\Directory\Member $postBody, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Directory\Member');
  }
  /**
   * Retrieve all members in a group (paginated) (members.listMembers)
   *
   * @param string $groupKey
   * Email or immutable Id of the group
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token to specify next page in the list
   * @opt_param string roles
   * Comma separated role values to filter list results on.
   * @opt_param int maxResults
   * Maximum number of results to return. Default is 200
   * @return \Google\Service\Directory\Members
   */
  public function listMembers($groupKey, $optParams = array())
  {
    $params = array('groupKey' => $groupKey);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\Members');
  }
  /**
   * Update membership of a user in the specified group. This method supports
   * patch semantics. (members.patch)
   *
   * @param string $groupKey
   * Email or immutable Id of the group. If Id, it should match with id of group object
   * @param string $memberKey
   * Email or immutable Id of the user. If Id, it should match with id of member object
   * @param Google_Member $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Member
   */
  public function patch($groupKey, $memberKey, \Google\Service\Directory\Member $postBody, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Directory\Member');
  }
  /**
   * Update membership of a user in the specified group. (members.update)
   *
   * @param string $groupKey
   * Email or immutable Id of the group. If Id, it should match with id of group object
   * @param string $memberKey
   * Email or immutable Id of the user. If Id, it should match with id of member object
   * @param Google_Member $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Member
   */
  public function update($groupKey, $memberKey, \Google\Service\Directory\Member $postBody, $optParams = array())
  {
    $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Directory\Member');
  }
}
