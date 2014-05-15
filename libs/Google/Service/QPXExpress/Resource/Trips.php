<?php 
namespace Google\Service\QPXExpress\Resource;
class Trips extends \Google\Resource\Service
{

  /**
   * Returns a list of flights. (trips.search)
   *
   * @param Google_TripsSearchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\QPXExpress\TripsSearchResponse
   */
  public function search(\Google\Service\QPXExpress\TripsSearchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), 'Google\Service\QPXExpress\TripsSearchResponse');
  }
}
