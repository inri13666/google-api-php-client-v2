<?php 
namespace Google\Service\Books\Resource;
class VolumesUseruploaded extends \Google\Resource\Service
{

  /**
   * Return a list of books uploaded by the current user.
   * (useruploaded.listVolumesUseruploaded)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating
    * recommendations.
   * @opt_param string volumeId
   * The ids of the volumes to be returned. If not specified all that match the processingState are
    * returned.
   * @opt_param string maxResults
   * Maximum number of results to return.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string startIndex
   * Index of the first result to return (starts at 0)
   * @opt_param string processingState
   * The processing state of the user uploaded volumes to be returned.
   * @return \Google\Service\Books\Volumes
   */
  public function listVolumesUseruploaded($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumes');
  }
}
