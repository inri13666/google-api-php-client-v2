<?php 
namespace Google\Service\CivicInfo\Resource;
class Representatives extends \Google\Resource\Service
{

  /**
   * Looks up political geography and (optionally) representative information
   * based on an address. (representatives.representativeInfoQuery)
   *
   * @param Google_RepresentativeInfoRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ocdId
   * The division to look up. May only be specified if the address field is not given in the request
    * body.
   * @opt_param bool includeOffices
   * Whether to return information about offices and officials. If false, only the top-level district
    * information will be returned.
   * @return \Google\Service\CivicInfo\RepresentativeInfoResponse
   */
  public function representativeInfoQuery(\Google\Service\CivicInfo\RepresentativeInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('representativeInfoQuery', array($params), 'Google\Service\CivicInfo\RepresentativeInfoResponse');
  }
}
