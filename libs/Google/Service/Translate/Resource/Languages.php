<?php 
namespace Google\Service\Translate\Resource;
class Languages extends \Google\Resource\Service
{

  /**
   * List the source/target languages supported by the API
   * (languages.listLanguages)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string target
   * the language and collation in which the localized results should be returned
   * @return \Google\Service\Translate\LanguagesListResponse
   */
  public function listLanguages($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Translate\LanguagesListResponse');
  }
}
