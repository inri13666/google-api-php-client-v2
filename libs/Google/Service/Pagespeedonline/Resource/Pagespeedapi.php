<?php 
namespace Google\Service\Pagespeedonline\Resource;
class Pagespeedapi extends \Google\Resource\Service
{

  /**
   * Runs Page Speed analysis on the page at the specified URL, and returns a Page
   * Speed score, a list of suggestions to make that page faster, and other
   * information. (pagespeedapi.runpagespeed)
   *
   * @param string $url
   * The URL to fetch and analyze
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool screenshot
   * Indicates if binary data containing a screenshot should be included
   * @opt_param string locale
   * The locale used to localize formatted results
   * @opt_param bool snapshots
   * Indicates if binary data containing snapshot images should be included
   * @opt_param string strategy
   * The analysis strategy to use
   * @opt_param string rule
   * A Page Speed rule to run; if none are given, all rules are run
   * @opt_param bool filter_third_party_resources
   * Indicates if third party resources should be filtered out before PageSpeed analysis.
   * @return \Google\Service\Pagespeedonline\Result
   */
  public function runpagespeed($url, $optParams = array())
  {
    $params = array('url' => $url);
    $params = array_merge($params, $optParams);
    return $this->call('runpagespeed', array($params), 'Google\Service\Pagespeedonline\Result');
  }
}
