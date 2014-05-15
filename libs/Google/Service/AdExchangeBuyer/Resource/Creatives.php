<?php 
namespace Google\Service\AdExchangeBuyer\Resource;
class Creatives extends \Google\Resource\Service
{

  /**
   * Gets the status for a single creative. A creative will be available 30-40
   * minutes after submission. (creatives.get)
   *
   * @param int $accountId
   * The id for the account that will serve this creative.
   * @param string $buyerCreativeId
   * The buyer-specific id for this creative.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\Creative
   */
  public function get($accountId, $buyerCreativeId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdExchangeBuyer\Creative');
  }
  /**
   * Submit a new creative. (creatives.insert)
   *
   * @param Google_Creative $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\Creative
   */
  public function insert(\Google\Service\AdExchangeBuyer\Creative $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\AdExchangeBuyer\Creative');
  }
  /**
   * Retrieves a list of the authenticated user's active creatives. A creative
   * will be available 30-40 minutes after submission. (creatives.listCreatives)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string statusFilter
   * When specified, only creatives having the given status are returned.
   * @opt_param string pageToken
   * A continuation token, used to page through ad clients. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response. Optional.
   * @opt_param string maxResults
   * Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
   * @opt_param string buyerCreativeId
   * When specified, only creatives for the given buyer creative ids are returned.
   * @opt_param int accountId
   * When specified, only creatives for the given account ids are returned.
   * @return \Google\Service\AdExchangeBuyer\CreativesList
   */
  public function listCreatives($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeBuyer\CreativesList');
  }
}
