<?php 
namespace Google\Service\Dfareporting\Resource;
class ReportsCompatibleFields extends \Google\Resource\Service
{

  /**
   * Returns the fields that are compatible to be selected in the respective
   * sections of a report criteria, given the fields already selected in the input
   * report and user permissions. (compatibleFields.query)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param Google_Report $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dfareporting\CompatibleFields
   */
  public function query($profileId, \Google\Service\Dfareporting\Report $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('query', array($params), 'Google\Service\Dfareporting\CompatibleFields');
  }
}
