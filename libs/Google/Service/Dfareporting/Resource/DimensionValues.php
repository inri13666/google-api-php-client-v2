<?php 
namespace Google\Service\Dfareporting\Resource;
class DimensionValues extends \Google\Resource\Service
{

  /**
   * Retrieves list of report dimension values for a list of filters.
   * (dimensionValues.query)
   *
   * @param string $profileId
   * The DFA user profile ID.
   * @param Google_DimensionValueRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The value of the nextToken from the previous result page.
   * @opt_param int maxResults
   * Maximum number of results to return.
   * @return \Google\Service\Dfareporting\DimensionValueList
   */
  public function query($profileId, \Google\Service\Dfareporting\DimensionValueRequest $postBody, $optParams = array())
  {
    $params = array('profileId' => $profileId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('query', array($params), 'Google\Service\Dfareporting\DimensionValueList');
  }
}
