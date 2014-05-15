<?php 
namespace Google\Service\Books\Resource;
class VolumesAssociated extends \Google\Resource\Service
{

  /**
   * Return a list of associated books. (associated.listVolumesAssociated)
   *
   * @param string $volumeId
   * ID of the source volume.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1 language and ISO-3166-1 country code. Ex: 'en_US'. Used for generating
    * recommendations.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string association
   * Association type.
   * @return \Google\Service\Books\Volumes
   */
  public function listVolumesAssociated($volumeId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumes');
  }
}
