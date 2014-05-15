<?php 
namespace Google\Service\Translate\Resource;
class Detections extends \Google\Resource\Service
{

  /**
   * Detect the language of text. (detections.listDetections)
   *
   * @param string $q
   * The text to detect
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Translate\DetectionsListResponse
   */
  public function listDetections($q, $optParams = array())
  {
    $params = array('q' => $q);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Translate\DetectionsListResponse');
  }
}
