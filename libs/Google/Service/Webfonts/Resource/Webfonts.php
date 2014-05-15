<?php 
namespace Google\Service\Webfonts\Resource;
class Webfonts extends \Google\Resource\Service
{

  /**
   * Retrieves the list of fonts currently served by the Google Fonts Developer
   * API (webfonts.listWebfonts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string sort
   * Enables sorting of the list
   * @return \Google\Service\Webfonts\WebfontList
   */
  public function listWebfonts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Webfonts\WebfontList');
  }
}
