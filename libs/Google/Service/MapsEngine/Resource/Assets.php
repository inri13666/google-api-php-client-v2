<?php 
namespace Google\Service\MapsEngine\Resource;
class Assets extends \Google\Resource\Service
{

  /**
   * Return metadata for a particular asset. (assets.get)
   *
   * @param string $id
   * The ID of the asset.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\Asset
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\MapsEngine\Asset');
  }
  /**
   * Return all assets readable by the current user. (assets.listAssets)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter
   * An RFC 3339 formatted date-time value (e.g. 1970-01-01T00:00:00Z). Returned assets will have
    * been modified at or after this time.
   * @opt_param string createdAfter
   * An RFC 3339 formatted date-time value (e.g. 1970-01-01T00:00:00Z). Returned assets will have
    * been created at or after this time.
   * @opt_param string projectId
   * The ID of a Maps Engine project, used to filter the response. To list all available projects
    * with their IDs, send a Projects: list request. You can also find your project ID as the value of
    * the DashboardPlace:cid URL parameter when signed in to mapsengine.google.com.
   * @opt_param string maxResults
   * The maximum number of items to include in a single response page. The maximum supported value is
    * 100.
   * @opt_param string pageToken
   * The continuation token, used to page through large result sets. To get the next page of results,
    * set this parameter to the value of nextPageToken from the previous response.
   * @opt_param string creatorEmail
   * An email address representing a user. Returned assets that have been created by the user
    * associated with the provided email address.
   * @opt_param string bbox
   * A bounding box, expressed as "west,south,east,north". If set, only assets which intersect this
    * bounding box will be returned.
   * @opt_param string modifiedBefore
   * An RFC 3339 formatted date-time value (e.g. 1970-01-01T00:00:00Z). Returned assets will have
    * been modified at or before this time.
   * @opt_param string createdBefore
   * An RFC 3339 formatted date-time value (e.g. 1970-01-01T00:00:00Z). Returned assets will have
    * been created at or before this time.
   * @opt_param string type
   * An asset type restriction. If set, only resources of this type will be returned.
   * @return \Google\Service\MapsEngine\AssetsListResponse
   */
  public function listAssets($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\MapsEngine\AssetsListResponse');
  }
}
