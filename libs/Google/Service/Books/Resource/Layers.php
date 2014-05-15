<?php 
namespace Google\Service\Books\Resource;
class Layers extends \Google\Resource\Service
{

  /**
   * Gets the layer summary for a volume. (layers.get)
   *
   * @param string $volumeId
   * The volume to retrieve layers for.
   * @param string $summaryId
   * The ID for the layer to get the summary for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string contentVersion
   * The content version for the requested volume.
   * @return \Google\Service\Books\Layersummary
   */
  public function get($volumeId, $summaryId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'summaryId' => $summaryId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\Layersummary');
  }
  /**
   * List the layer summaries for a volume. (layers.listLayers)
   *
   * @param string $volumeId
   * The volume to retrieve layers for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The value of the nextToken from the previous page.
   * @opt_param string contentVersion
   * The content version for the requested volume.
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\Layersummaries
   */
  public function listLayers($volumeId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Layersummaries');
  }
}
