<?php 
namespace Google\Service\MapsEngine\Resource;
class Tables extends \Google\Resource\Service
{

  /**
   * Create a table asset. (tables.create)
   *
   * @param Google_Table $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\Table
   */
  public function create(\Google\Service\MapsEngine\Table $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), 'Google\Service\MapsEngine\Table');
  }
  /**
   * Return metadata for a particular table, including the schema. (tables.get)
   *
   * @param string $id
   * The ID of the table.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string version
   *
   * @return \Google\Service\MapsEngine\Table
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\MapsEngine\Table');
  }
  /**
   * Return all tables readable by the current user. (tables.listTables)
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
   * @return \Google\Service\MapsEngine\TablesListResponse
   */
  public function listTables($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\MapsEngine\TablesListResponse');
  }
  /**
   * Create a placeholder table asset to which table files can be uploaded. Once
   * the placeholder has been created, files are uploaded to the
   * https://www.googleapis.com/upload/mapsengine/v1/tables/table_id/files
   * endpoint. See Table Upload in the Developer's Guide or Table.files: insert in
   * the reference documentation for more information. (tables.upload)
   *
   * @param Google_Table $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\Table
   */
  public function upload(\Google\Service\MapsEngine\Table $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('upload', array($params), 'Google\Service\MapsEngine\Table');
  }
}
