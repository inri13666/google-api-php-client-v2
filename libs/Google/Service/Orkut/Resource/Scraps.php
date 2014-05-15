<?php 
namespace Google\Service\Orkut\Resource;
class Scraps extends \Google\Resource\Service
{

  /**
   * Creates a new scrap. (scraps.insert)
   *
   * @param Google_Activity $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Activity
   */
  public function insert(\Google\Service\Orkut\Activity $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Orkut\Activity');
  }
}
