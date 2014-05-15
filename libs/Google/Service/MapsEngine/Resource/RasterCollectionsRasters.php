<?php 
namespace Google\Service\MapsEngine\Resource;
class RasterCollectionsRasters extends \Google\Resource\Service
{

  /**
   * Remove rasters from an existing raster collection.
   *
   * Up to 50 rasters can be included in a single batchDelete request. Each
   * batchDelete request is atomic. (rasters.batchDelete)
   *
   * @param string $id
   * The ID of the raster collection to which these rasters belong.
   * @param Google_RasterCollectionsRasterBatchDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\RasterCollectionsRastersBatchDeleteResponse
   */
  public function batchDelete($id, \Google\Service\MapsEngine\RasterCollectionsRasterBatchDeleteRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', array($params), 'Google\Service\MapsEngine\RasterCollectionsRastersBatchDeleteResponse');
  }
  /**
   * Add rasters to an existing raster collection. Rasters must be successfully
   * processed in order to be added to a raster collection.
   *
   * Up to 50 rasters can be included in a single batchInsert request. Each
   * batchInsert request is atomic. (rasters.batchInsert)
   *
   * @param string $id
   * The ID of the raster collection to which these rasters belong.
   * @param Google_RasterCollectionsRastersBatchInsertRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\RasterCollectionsRastersBatchInsertResponse
   */
  public function batchInsert($id, \Google\Service\MapsEngine\RasterCollectionsRastersBatchInsertRequest $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('batchInsert', array($params), 'Google\Service\MapsEngine\RasterCollectionsRastersBatchInsertResponse');
  }
  /**
   * Return all rasters within a raster collection.
   * (rasters.listRasterCollectionsRasters)
   *
   * @param string $id
   * The ID of the raster collection to which these rasters belong.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string modifiedAfter
   * An RFC 3339 formatted date-time value (e.g. 1970-01-01T00:00:00Z). Returned assets will have
    * been modified at or after this time.
   * @opt_param string createdAfter
   * An RFC 3339 formatted date-time value (e.g. 1970-01-01T00:00:00Z). Returned assets will have
    * been created at or after this time.
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
   * @return \Google\Service\MapsEngine\RastersListResponse
   */
  public function listRasterCollectionsRasters($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\MapsEngine\RastersListResponse');
  }
}
