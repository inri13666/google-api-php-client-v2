<?php 
namespace Google\Service\Analytics\Resource;
class ManagementSegments extends \Google\Resource\Service
{

  /**
   * Lists segments to which the user has access.
   * (segments.listManagementSegments)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int max-results
   * The maximum number of segments to include in this response.
   * @opt_param int start-index
   * An index of the first segment to retrieve. Use this parameter as a pagination mechanism along
    * with the max-results parameter.
   * @return \Google\Service\Analytics\Segments
   */
  public function listManagementSegments($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Analytics\Segments');
  }
}
