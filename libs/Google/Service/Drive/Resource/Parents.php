<?php 
namespace Google\Service\Drive\Resource;
class Parents extends \Google\Resource\Service
{

  /**
   * Removes a parent from a file. (parents.delete)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $parentId
   * The ID of the parent.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $parentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'parentId' => $parentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a specific parent reference. (parents.get)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $parentId
   * The ID of the parent.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ParentReference
   */
  public function get($fileId, $parentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'parentId' => $parentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\ParentReference');
  }
  /**
   * Adds a parent folder for a file. (parents.insert)
   *
   * @param string $fileId
   * The ID of the file.
   * @param Google_ParentReference $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ParentReference
   */
  public function insert($fileId, \Google\Service\Drive\ParentReference $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Drive\ParentReference');
  }
  /**
   * Lists a file's parents. (parents.listParents)
   *
   * @param string $fileId
   * The ID of the file.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\ParentList
   */
  public function listParents($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Drive\ParentList');
  }
}
