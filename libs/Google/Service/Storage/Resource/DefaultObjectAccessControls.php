<?php 
namespace Google\Service\Storage\Resource;
class DefaultObjectAccessControls extends \Google\Resource\Service
{

  /**
   * Permanently deletes the default object ACL entry for the specified entity on
   * the specified bucket. (defaultObjectAccessControls.delete)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   */
  public function delete($bucket, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns the default object ACL entry for the specified entity on the
   * specified bucket. (defaultObjectAccessControls.get)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function get($bucket, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
  /**
   * Creates a new default object ACL entry on the specified bucket.
   * (defaultObjectAccessControls.insert)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param Google_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function insert($bucket, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
  /**
   * Retrieves default object ACL entries on the specified bucket.
   * (defaultObjectAccessControls.listDefaultObjectAccessControls)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * If present, only return default ACL listing if the bucket's current metageneration matches this
    * value.
   * @opt_param string ifMetagenerationNotMatch
   * If present, only return default ACL listing if the bucket's current metageneration does not
    * match the given value.
   * @return \Google\Service\Storage\ObjectAccessControls
   */
  public function listDefaultObjectAccessControls($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Storage\ObjectAccessControls');
  }
  /**
   * Updates a default object ACL entry on the specified bucket. This method
   * supports patch semantics. (defaultObjectAccessControls.patch)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param Google_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function patch($bucket, $entity, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
  /**
   * Updates a default object ACL entry on the specified bucket.
   * (defaultObjectAccessControls.update)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param Google_ObjectAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\ObjectAccessControl
   */
  public function update($bucket, $entity, \Google\Service\Storage\ObjectAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Storage\ObjectAccessControl');
  }
}
