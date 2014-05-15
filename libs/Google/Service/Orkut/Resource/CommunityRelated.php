<?php 
namespace Google\Service\Orkut\Resource;
class CommunityRelated extends \Google\Resource\Service
{

  /**
   * Retrieves the communities related to another one.
   * (communityRelated.listCommunityRelated)
   *
   * @param int $communityId
   * The ID of the community whose related communities will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityList
   */
  public function listCommunityRelated($communityId, $optParams = array())
  {
    $params = array('communityId' => $communityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Orkut\CommunityList');
  }
}
