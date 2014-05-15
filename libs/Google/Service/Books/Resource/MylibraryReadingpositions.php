<?php 
namespace Google\Service\Books\Resource;
class MylibraryReadingpositions extends \Google\Resource\Service
{

  /**
   * Retrieves my reading position information for a volume.
   * (readingpositions.get)
   *
   * @param string $volumeId
   * ID of volume for which to retrieve a reading position.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string contentVersion
   * Volume content version for which this reading position is requested.
   * @return \Google\Service\Books\ReadingPosition
   */
  public function get($volumeId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\ReadingPosition');
  }
  /**
   * Sets my reading position information for a volume.
   * (readingpositions.setPosition)
   *
   * @param string $volumeId
   * ID of volume for which to update the reading position.
   * @param string $timestamp
   * RFC 3339 UTC format timestamp associated with this reading position.
   * @param string $position
   * Position string for the new volume reading position.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string deviceCookie
   * Random persistent device cookie optional on set position.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string contentVersion
   * Volume content version for which this reading position applies.
   * @opt_param string action
   * Action that caused this reading position to be set.
   */
  public function setPosition($volumeId, $timestamp, $position, $optParams = array())
  {
    $params = array('volumeId' => $volumeId, 'timestamp' => $timestamp, 'position' => $position);
    $params = array_merge($params, $optParams);
    return $this->call('setPosition', array($params));
  }
}
