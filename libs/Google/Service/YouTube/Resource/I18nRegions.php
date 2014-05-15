<?php 
namespace Google\Service\YouTube\Resource;
class I18nRegions extends \Google\Resource\Service
{

  /**
   * Returns a list of supported regions. (i18nRegions.listI18nRegions)
   *
   * @param string $part
   * The part parameter specifies a comma-separated list of one or more i18nRegion resource
    * properties that the API response will include. The part names that you can include in the
    * parameter value are id and snippet.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * The hl parameter specifies the language that should be used for text values in the API response.
   * @return \Google\Service\YouTube\I18nRegionListResponse
   */
  public function listI18nRegions($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTube\I18nRegionListResponse');
  }
}
