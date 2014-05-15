<?php 
namespace Google\Service\Doubleclicksearch\Resource;
class Conversion extends \Google\Resource\Service
{

  /**
   * Retrieves a list of conversions from a DoubleClick Search engine account.
   * (conversion.get)
   *
   * @param string $agencyId
   * Numeric ID of the agency.
   * @param string $advertiserId
   * Numeric ID of the advertiser.
   * @param string $engineAccountId
   * Numeric ID of the engine account.
   * @param int $endDate
   * Last date (inclusive) on which to retrieve conversions. Format is yyyymmdd.
   * @param int $rowCount
   * The number of conversions to return per call.
   * @param int $startDate
   * First date (inclusive) on which to retrieve conversions. Format is yyyymmdd.
   * @param string $startRow
   * The 0-based starting index for retrieving conversions results.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string adGroupId
   * Numeric ID of the ad group.
   * @opt_param string campaignId
   * Numeric ID of the campaign.
   * @opt_param string adId
   * Numeric ID of the ad.
   * @opt_param string criterionId
   * Numeric ID of the criterion.
   * @return \Google\Service\Doubleclicksearch\ConversionList
   */
  public function get($agencyId, $advertiserId, $engineAccountId, $endDate, $rowCount, $startDate, $startRow, $optParams = array())
  {
    $params = array('agencyId' => $agencyId, 'advertiserId' => $advertiserId, 'engineAccountId' => $engineAccountId, 'endDate' => $endDate, 'rowCount' => $rowCount, 'startDate' => $startDate, 'startRow' => $startRow);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Doubleclicksearch\ConversionList');
  }
  /**
   * Inserts a batch of new conversions into DoubleClick Search.
   * (conversion.insert)
   *
   * @param Google_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\ConversionList
   */
  public function insert(\Google\Service\Doubleclicksearch\ConversionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Doubleclicksearch\ConversionList');
  }
  /**
   * Updates a batch of conversions in DoubleClick Search. This method supports
   * patch semantics. (conversion.patch)
   *
   * @param string $advertiserId
   * Numeric ID of the advertiser.
   * @param string $agencyId
   * Numeric ID of the agency.
   * @param int $endDate
   * Last date (inclusive) on which to retrieve conversions. Format is yyyymmdd.
   * @param string $engineAccountId
   * Numeric ID of the engine account.
   * @param int $rowCount
   * The number of conversions to return per call.
   * @param int $startDate
   * First date (inclusive) on which to retrieve conversions. Format is yyyymmdd.
   * @param string $startRow
   * The 0-based starting index for retrieving conversions results.
   * @param Google_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\ConversionList
   */
  public function patch($advertiserId, $agencyId, $endDate, $engineAccountId, $rowCount, $startDate, $startRow, \Google\Service\Doubleclicksearch\ConversionList $postBody, $optParams = array())
  {
    $params = array('advertiserId' => $advertiserId, 'agencyId' => $agencyId, 'endDate' => $endDate, 'engineAccountId' => $engineAccountId, 'rowCount' => $rowCount, 'startDate' => $startDate, 'startRow' => $startRow, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Doubleclicksearch\ConversionList');
  }
  /**
   * Updates a batch of conversions in DoubleClick Search. (conversion.update)
   *
   * @param Google_ConversionList $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\ConversionList
   */
  public function update(\Google\Service\Doubleclicksearch\ConversionList $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Doubleclicksearch\ConversionList');
  }
  /**
   * Updates the availabilities of a batch of floodlight activities in DoubleClick
   * Search. (conversion.updateAvailability)
   *
   * @param Google_UpdateAvailabilityRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Doubleclicksearch\UpdateAvailabilityResponse
   */
  public function updateAvailability(\Google\Service\Doubleclicksearch\UpdateAvailabilityRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateAvailability', array($params), 'Google\Service\Doubleclicksearch\UpdateAvailabilityResponse');
  }
}
