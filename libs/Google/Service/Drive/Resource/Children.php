<?php 
namespace Google\Service\Drive\Resource;
class Children extends \Google\Resource\Service
{

  /**
   * Removes a child from a folder. (children.delete)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param string $childId
   * The ID of the child.
   * @param array $optParams Optional parameters.
   */
  public function delete($folderId, $childId, $optParams = array())
  {
    $params = array('folderId' => $folderId, 'childId' => $childId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a specific child reference. (children.get)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param string $childId
   * The ID of the child.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ChildReference
   */
  public function get($folderId, $childId, $optParams = array())
  {
    $params = array('folderId' => $folderId, 'childId' => $childId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\ChildReference');
  }
  /**
   * Inserts a file into a folder. (children.insert)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param Google_ChildReference $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ChildReference
   */
  public function insert($folderId, \Google\Service\Drive\ChildReference $postBody, $optParams = array())
  {
    $params = array('folderId' => $folderId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Drive\ChildReference');
  }
  /**
   * Lists a folder's children. (children.listChildren)
   *
   * @param string $folderId
   * The ID of the folder.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string q
   * Query string for searching children.
   * @opt_param string pageToken
   * Page token for children.
   * @opt_param int maxResults
   * Maximum number of children to return.
   * @return \Google\Service\Drive\ChildList
   */
  public function listChildren($folderId, $optParams = array())
  {
    $params = array('folderId' => $folderId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Drive\ChildList');
  }
}
