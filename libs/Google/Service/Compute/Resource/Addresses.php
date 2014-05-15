<?php 
namespace Google\Service\Compute\Resource;
class Addresses extends \Google\Resource\Service
{

  /**
   * Retrieves the list of addresses grouped by scope. (addresses.aggregatedList)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 500.
   * @return \Google\Service\Compute\AddressAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), 'Google\Service\Compute\AddressAggregatedList');
  }
  /**
   * Deletes the specified address resource. (addresses.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $address
   * Name of the address resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $region, $address, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'address' => $address);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified address resource. (addresses.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $address
   * Name of the address resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Address
   */
  public function get($project, $region, $address, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'address' => $address);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Address');
  }
  /**
   * Creates an address resource in the specified project using the data included
   * in the request. (addresses.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param Google_Address $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, $region, \Google\Service\Compute\Address $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of address resources contained within the specified
   * region. (addresses.listAddresses)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 500.
   * @return \Google\Service\Compute\AddressList
   */
  public function listAddresses($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\AddressList');
  }
}
