<?php 
namespace Google\Service\Storage\Resource;
class BucketAccessControls extends \Google\Resource\Service
{

  /**
   * Permanently deletes the ACL entry for the specified entity on the specified
   * bucket. (bucketAccessControls.delete)
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
   * Returns the ACL entry for the specified entity on the specified bucket.
   * (bucketAccessControls.get)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\BucketAccessControl
   */
  public function get($bucket, $entity, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Storage\BucketAccessControl');
  }
  /**
   * Creates a new ACL entry on the specified bucket.
   * (bucketAccessControls.insert)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param Google_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\BucketAccessControl
   */
  public function insert($bucket, \Google\Service\Storage\BucketAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Storage\BucketAccessControl');
  }
  /**
   * Retrieves ACL entries on the specified bucket.
   * (bucketAccessControls.listBucketAccessControls)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\BucketAccessControls
   */
  public function listBucketAccessControls($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Storage\BucketAccessControls');
  }
  /**
   * Updates an ACL entry on the specified bucket. This method supports patch
   * semantics. (bucketAccessControls.patch)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param Google_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\BucketAccessControl
   */
  public function patch($bucket, $entity, \Google\Service\Storage\BucketAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Storage\BucketAccessControl');
  }
  /**
   * Updates an ACL entry on the specified bucket. (bucketAccessControls.update)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param string $entity
   * The entity holding the permission. Can be user-userId, user-emailAddress, group-groupId, group-
    * emailAddress, allUsers, or allAuthenticatedUsers.
   * @param Google_BucketAccessControl $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Storage\BucketAccessControl
   */
  public function update($bucket, $entity, \Google\Service\Storage\BucketAccessControl $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'entity' => $entity, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Storage\BucketAccessControl');
  }
}
