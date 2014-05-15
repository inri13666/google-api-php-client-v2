<?php 
namespace Google\Service\Calendar\Resource;
class Freebusy extends \Google\Resource\Service
{

  /**
   * Returns free/busy information for a set of calendars. (freebusy.query)
   *
   * @param Google_FreeBusyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\FreeBusyResponse
   */
  public function query(\Google\Service\Calendar\FreeBusyRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('query', array($params), 'Google\Service\Calendar\FreeBusyResponse');
  }
}
