<?php 
namespace Google\Service\Doubleclicksearch\Resource;
class SavedColumns extends \Google\Resource\Service
{

  /**
   * Retrieve the list of saved columns for a specified advertiser.
   * (savedColumns.listSavedColumns)
   *
   * @param string $agencyId
   * DS ID of the agency.
   * @param string $advertiserId
   * DS ID of the advertiser.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\SavedColumnList
   */
  public function listSavedColumns($agencyId, $advertiserId, $optParams = array())
  {
    $params = array('agencyId' => $agencyId, 'advertiserId' => $advertiserId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Doubleclicksearch\SavedColumnList');
  }
}
