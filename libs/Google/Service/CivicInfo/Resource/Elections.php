<?php 
namespace Google\Service\CivicInfo\Resource;
class Elections extends \Google\Resource\Service
{

  /**
   * List of available elections to query. (elections.electionQuery)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\CivicInfo\ElectionsQueryResponse
   */
  public function electionQuery($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('electionQuery', array($params), 'Google\Service\CivicInfo\ElectionsQueryResponse');
  }
  /**
   * Looks up information relevant to a voter based on the voter's registered
   * address. (elections.voterInfoQuery)
   *
   * @param string $electionId
   * The unique ID of the election to look up. A list of election IDs can be obtained at
    * https://www.googleapis.com/civicinfo/{version}/elections
   * @param Google_VoterInfoRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool officialOnly
   * If set to true, only data from official state sources will be returned.
   * @return \Google\Service\CivicInfo\VoterInfoResponse
   */
  public function voterInfoQuery($electionId, \Google\Service\CivicInfo\VoterInfoRequest $postBody, $optParams = array())
  {
    $params = array('electionId' => $electionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('voterInfoQuery', array($params), 'Google\Service\CivicInfo\VoterInfoResponse');
  }
}
