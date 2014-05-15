<?php 
namespace Google\Service\Mirror\Resource;
class Locations extends \Google\Resource\Service
{

  /**
   * Gets a single location by ID. (locations.get)
   *
   * @param string $id
   * The ID of the location or latest for the last known location.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Location
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Mirror\Location');
  }
  /**
   * Retrieves a list of locations for the user. (locations.listLocations)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\LocationsListResponse
   */
  public function listLocations($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Mirror\LocationsListResponse');
  }
}
