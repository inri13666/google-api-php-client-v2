<?php 
namespace Google\Service\Drive\Resource;
class Properties extends \Google\Resource\Service
{

  /**
   * Deletes a property. (properties.delete)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $propertyKey
   * The key of the property.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string visibility
   * The visibility of the property.
   */
  public function delete($fileId, $propertyKey, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a property by its key. (properties.get)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $propertyKey
   * The key of the property.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string visibility
   * The visibility of the property.
   * @return \Google\Service\Drive\Property
   */
  public function get($fileId, $propertyKey, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\Property');
  }
  /**
   * Adds a property to a file. (properties.insert)
   *
   * @param string $fileId
   * The ID of the file.
   * @param Google_Property $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Property
   */
  public function insert($fileId, \Google\Service\Drive\Property $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Drive\Property');
  }
  /**
   * Lists a file's properties. (properties.listProperties)
   *
   * @param string $fileId
   * The ID of the file.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\PropertyList
   */
  public function listProperties($fileId, $optParams = array())
  {
    $params = array('fileId' => $fileId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Drive\PropertyList');
  }
  /**
   * Updates a property. This method supports patch semantics. (properties.patch)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $propertyKey
   * The key of the property.
   * @param Google_Property $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string visibility
   * The visibility of the property.
   * @return \Google\Service\Drive\Property
   */
  public function patch($fileId, $propertyKey, \Google\Service\Drive\Property $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Drive\Property');
  }
  /**
   * Updates a property. (properties.update)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $propertyKey
   * The key of the property.
   * @param Google_Property $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string visibility
   * The visibility of the property.
   * @return \Google\Service\Drive\Property
   */
  public function update($fileId, $propertyKey, \Google\Service\Drive\Property $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Drive\Property');
  }
}
