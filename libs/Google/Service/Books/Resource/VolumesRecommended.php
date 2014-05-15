<?php 
namespace Google\Service\Books\Resource;
class VolumesRecommended extends \Google\Resource\Service
{

  /**
   * Return a list of recommended books for the current user.
   * (recommended.listVolumesRecommended)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating
    * recommendations.
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\Volumes
   */
  public function listVolumesRecommended($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumes');
  }
  /**
   * Rate a recommended book for the current user. (recommended.rate)
   *
   * @param string $rating
   * Rating to be given to the volume.
   * @param string $volumeId
   * ID of the source volume.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating
    * recommendations.
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\BooksVolumesRecommendedRateResponse
   */
  public function rate($rating, $volumeId, $optParams = array())
  {
    $params = array('rating' => $rating, 'volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('rate', array($params), 'Google\Service\Books\BooksVolumesRecommendedRateResponse');
  }
}
