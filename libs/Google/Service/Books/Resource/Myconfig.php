<?php 
namespace Google\Service\Books\Resource;
class Myconfig extends \Google\Resource\Service
{

  /**
   * Release downloaded content access restriction.
   * (myconfig.releaseDownloadAccess)
   *
   * @param string $volumeIds
   * The volume(s) to release restrictions for.
   * @param string $cpksver
   * The device/version ID from which to release the restriction.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\DownloadAccesses
   */
  public function releaseDownloadAccess($volumeIds, $cpksver, $optParams = array())
  {
    $params = array('volumeIds' => $volumeIds, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('releaseDownloadAccess', array($params), 'Google\Service\Books\DownloadAccesses');
  }
  /**
   * Request concurrent and download access restrictions. (myconfig.requestAccess)
   *
   * @param string $source
   * String to identify the originator of this request.
   * @param string $volumeId
   * The volume to request concurrent/download restrictions for.
   * @param string $nonce
   * The client nonce value.
   * @param string $cpksver
   * The device/version ID from which to request the restrictions.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string licenseTypes
   * The type of access license to request. If not specified, the default is BOTH.
   * @opt_param string locale
   * ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
   * @return \Google\Service\Books\RequestAccess
   */
  public function requestAccess($source, $volumeId, $nonce, $cpksver, $optParams = array())
  {
    $params = array('source' => $source, 'volumeId' => $volumeId, 'nonce' => $nonce, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('requestAccess', array($params), 'Google\Service\Books\RequestAccess');
  }
  /**
   * Request downloaded content access for specified volumes on the My eBooks
   * shelf. (myconfig.syncVolumeLicenses)
   *
   * @param string $source
   * String to identify the originator of this request.
   * @param string $nonce
   * The client nonce value.
   * @param string $cpksver
   * The device/version ID from which to release the restriction.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string features
   * List of features supported by the client, i.e., 'RENTALS'
   * @opt_param string locale
   * ISO-639-1, ISO-3166-1 codes for message localization, i.e. en_US.
   * @opt_param bool showPreorders
   * Set to true to show pre-ordered books. Defaults to false.
   * @opt_param string volumeIds
   * The volume(s) to request download restrictions for.
   * @return \Google\Service\Books\Volumes
   */
  public function syncVolumeLicenses($source, $nonce, $cpksver, $optParams = array())
  {
    $params = array('source' => $source, 'nonce' => $nonce, 'cpksver' => $cpksver);
    $params = array_merge($params, $optParams);
    return $this->call('syncVolumeLicenses', array($params), 'Google\Service\Books\Volumes');
  }
}
