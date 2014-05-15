<?php 
namespace Google\Service\SQLAdmin\Resource;
class Tiers extends \Google\Resource\Service
{

  /**
   * Lists all available service tiers for Google Cloud SQL, for example D1, D2.
   * For related information, see Pricing. (tiers.listTiers)
   *
   * @param string $project
   * Project ID of the project for which to list tiers.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\TiersListResponse
   */
  public function listTiers($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\SQLAdmin\TiersListResponse');
  }
}
