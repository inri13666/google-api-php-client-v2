<?php 
namespace Google\Service\Translate\Resource;
class Translations extends \Google\Resource\Service
{

  /**
   * Returns text translations from one language to another.
   * (translations.listTranslations)
   *
   * @param string $q
   * The text to translate
   * @param string $target
   * The target language into which the text should be translated
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * The source language of the text
   * @opt_param string format
   * The format of the text
   * @opt_param string cid
   * The customization id for translate
   * @return \Google\Service\Translate\TranslationsListResponse
   */
  public function listTranslations($q, $target, $optParams = array())
  {
    $params = array('q' => $q, 'target' => $target);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Translate\TranslationsListResponse');
  }
}
