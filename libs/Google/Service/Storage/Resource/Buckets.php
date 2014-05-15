<?php 
namespace Google\Service\Storage\Resource;
class Buckets extends \Google\Resource\Service
{

  /**
   * Permanently deletes an empty bucket. (buckets.delete)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * If set, only deletes the bucket if its metageneration matches this value.
   * @opt_param string ifMetagenerationNotMatch
   * If set, only deletes the bucket if its metageneration does not match this value.
   */
  public function delete($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns metadata for the specified bucket. (buckets.get)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration matches the given value.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration does not match the given value.
   * @opt_param string projection
   * Set of properties to return. Defaults to noAcl.
   * @return \Google\Service\Storage\Bucket
   */
  public function get($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Storage\Bucket');
  }
  /**
   * Creates a new bucket. (buckets.insert)
   *
   * @param string $project
   * A valid API project identifier.
   * @param Google_Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string predefinedAcl
   * Apply a predefined set of access controls to this bucket.
   * @opt_param string projection
   * Set of properties to return. Defaults to noAcl, unless the bucket resource specifies acl or
    * defaultObjectAcl properties, when it defaults to full.
   * @return \Google\Service\Storage\Bucket
   */
  public function insert($project, \Google\Service\Storage\Bucket $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Storage\Bucket');
  }
  /**
   * Retrieves a list of buckets for a given project. (buckets.listBuckets)
   *
   * @param string $project
   * A valid API project identifier.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A previously-returned page token representing part of the larger set of results to view.
   * @opt_param string projection
   * Set of properties to return. Defaults to noAcl.
   * @opt_param string maxResults
   * Maximum number of buckets to return.
   * @return \Google\Service\Storage\Buckets
   */
  public function listBuckets($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Storage\Buckets');
  }
  /**
   * Updates a bucket. This method supports patch semantics. (buckets.patch)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param Google_Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration matches the given value.
   * @opt_param string predefinedAcl
   * Apply a predefined set of access controls to this bucket.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration does not match the given value.
   * @opt_param string projection
   * Set of properties to return. Defaults to full.
   * @return \Google\Service\Storage\Bucket
   */
  public function patch($bucket, \Google\Service\Storage\Bucket $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Storage\Bucket');
  }
  /**
   * Updates a bucket. (buckets.update)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param Google_Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration matches the given value.
   * @opt_param string predefinedAcl
   * Apply a predefined set of access controls to this bucket.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration does not match the given value.
   * @opt_param string projection
   * Set of properties to return. Defaults to full.
   * @return \Google\Service\Storage\Bucket
   */
  public function update($bucket, \Google\Service\Storage\Bucket $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Storage\Bucket');
  }
}
