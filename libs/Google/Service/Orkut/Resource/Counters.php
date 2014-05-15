<?php 
namespace Google\Service\Orkut\Resource;
class Counters extends \Google\Resource\Service
{

  /**
   * Retrieves the counters of a user. (counters.listCounters)
   *
   * @param string $userId
   * The ID of the user whose counters will be listed. Can be me to refer to caller.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Counters
   */
  public function listCounters($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Orkut\Counters');
  }
}
