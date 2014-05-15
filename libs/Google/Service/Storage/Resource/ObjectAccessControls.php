<?php 
namespace Google\Service\Storage\Resource;
class ObjectAccessControls extends \Google\Resource\Service
{

  /**
   * Permanently deletes the ACL entry for the specified entity on the specified
   * object. (objectAccessControls.delete)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $object
   * Name of the object.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation
   * If present, selects a specific revision of this object (as opposed to the latest version, the
    * default).
   */
  public function delete($bucket, $object, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns the ACL entry for the specified entity on the specified object.
   * (objectAccessControls.get)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $object
   * Name of the object.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation
   * If present, selects a specific revision of this object (as opposed to the latest version, the
    * default).
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function get($bucket, $object, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
  /**
   * Creates a new ACL entry on the specified object.
   * (objectAccessControls.insert)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $object
   * Name of the object.
   * @param Google_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation
   * If present, selects a specific revision of this object (as opposed to the latest version, the
    * default).
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function insert($bucket, $object, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
  /**
   * Retrieves ACL entries on the specified object.
   * (objectAccessControls.listObjectAccessControls)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $object
   * Name of the object.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation
   * If present, selects a specific revision of this object (as opposed to the latest version, the
    * default).
   * @return \Google\Service\Storage\ObjectAccessControls
   */
  public function listObjectAccessControls($bucket, $object, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Storage\ObjectAccessControls');
  }
  /**
   * Updates an ACL entry on the specified object. This method supports patch
   * semantics. (objectAccessControls.patch)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $object
   * Name of the object.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param Google_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation
   * If present, selects a specific revision of this object (as opposed to the latest version, the
    * default).
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function patch($bucket, $object, $entity, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
  /**
   * Updates an ACL entry on the specified object. (objectAccessControls.update)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $object
   * Name of the object.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param Google_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string generation
   * If present, selects a specific revision of this object (as opposed to the latest version, the
    * default).
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function update($bucket, $object, $entity, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'object' => $object, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
}
