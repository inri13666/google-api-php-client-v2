<?php 
namespace Google\Service\Coordinate\Resource;
class CustomFieldDef extends \Google\Resource\Service
{

  /**
   * Retrieves a list of custom field definitions for a team.
   * (customFieldDef.listCustomFieldDef)
   *
   * @param string $teamId
   * Team ID
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Coordinate\CustomFieldDefListResponse
   */
  public function listCustomFieldDef($teamId, $optParams = array())
  {
    $params = array('teamId' => $teamId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Coordinate\CustomFieldDefListResponse');
  }
}
