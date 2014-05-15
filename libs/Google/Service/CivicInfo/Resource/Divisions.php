<?php 
namespace Google\Service\CivicInfo\Resource;
class Divisions extends \Google\Resource\Service
{

  /**
   * Searches for political divisions by their natural name or OCD ID.
   * (divisions.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string query
   * The search query. Queries can cover any parts of a OCD ID or a human readable division name. All
    * words given in the query are treated as required patterns. In addition to that, most query
    * operators of the Apache Lucene library are supported. See
    * http://lucene.apache.org/core/2_9_4/queryparsersyntax.html
   * @return \Google\Service\CivicInfo\DivisionSearchResponse
   */
  public function search($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), 'Google\Service\CivicInfo\DivisionSearchResponse');
  }
}
