<?php 
namespace Google\Service\YouTube\Resource;
class I18nLanguages extends \Google\Resource\Service
{

  /**
   * Returns a list of supported languages. (i18nLanguages.listI18nLanguages)
   *
   * @param string $part
   * The part parameter specifies a comma-separated list of one or more i18nLanguage resource
    * properties that the API response will include. The part names that you can include in the
    * parameter value are id and snippet.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * The hl parameter specifies the language that should be used for text values in the API response.
   * @return \Google\Service\YouTube\I18nLanguageListResponse
   */
  public function listI18nLanguages($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTube\I18nLanguageListResponse');
  }
}
