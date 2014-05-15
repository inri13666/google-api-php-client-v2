<?php 
namespace Google\Service\AdSense\Resource;
class Adclients extends \Google\Resource\Service
{

  /**
   * List all ad clients in this AdSense account. (adclients.listAdclients)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through ad clients. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of ad clients to include in the response, used for paging.
   * @return \Google\Service\AdSense\AdClients
   */
  public function listAdclients($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\AdClients');
  }
}
