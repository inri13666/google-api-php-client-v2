<?php 
namespace Google\Service;
class Freebase extends \Google\Service
{



  private $base_methods;

  /**
   * Constructs the internal representation of the Freebase service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'freebase/v1/';
    $this->version = 'v1';
    $this->serviceName = 'freebase';

    $this->base_methods = new \Google\Resource\Service(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            'reconcile' => array(
              'path' => 'reconcile',
              'httpMethod' => 'GET',
              'parameters' => array(
                'lang' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'confidence' => array(
                  'location' => 'query',
                  'type' => 'number',
                ),
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'kind' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'prop' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'limit' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'search' => array(
              'path' => 'search',
              'httpMethod' => 'GET',
              'parameters' => array(
                'domain' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'help' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'scoring' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'cursor' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'prefixed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'exact' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'mid' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'encode' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'as_of_time' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'stemmed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'format' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'spell' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'with' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'lang' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'indent' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'callback' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'without' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'limit' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'output' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'mql_output' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
  /**
   * Reconcile entities to Freebase open data. (reconcile)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string lang
   * Languages for names and values. First language is used for display. Default is 'en'.
   * @opt_param float confidence
   * Required confidence for a candidate to match. Must be between .5 and 1.0
   * @opt_param string name
   * Name of entity.
   * @opt_param string kind
   * Classifications of entity e.g. type, category, title.
   * @opt_param string prop
   * Property values for entity formatted as
  :
   * @opt_param int limit
   * Maximum number of candidates to return.
   * @return \Google\Service\Freebase\ReconcileGet
   */
  public function reconcile($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('reconcile', array($params), 'Google\Service\Freebase\ReconcileGet');
  }
  /**
   * Search Freebase open data. (search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string domain
   * Restrict to topics with this Freebase domain id.
   * @opt_param string help
   * The keyword to request help on.
   * @opt_param string query
   * Query term to search for.
   * @opt_param string scoring
   * Relevance scoring algorithm to use.
   * @opt_param int cursor
   * The cursor value to use for the next page of results.
   * @opt_param bool prefixed
   * Prefix match against names and aliases.
   * @opt_param bool exact
   * Query on exact name and keys only.
   * @opt_param string mid
   * A mid to use instead of a query.
   * @opt_param string encode
   * The encoding of the response. You can use this parameter to enable html encoding.
   * @opt_param string type
   * Restrict to topics with this Freebase type id.
   * @opt_param string as_of_time
   * A mql as_of_time value to use with mql_output queries.
   * @opt_param bool stemmed
   * Query on stemmed names and aliases. May not be used with prefixed.
   * @opt_param string format
   * Structural format of the json response.
   * @opt_param string spell
   * Request 'did you mean' suggestions
   * @opt_param string with
   * A rule to match against.
   * @opt_param string lang
   * The code of the language to run the query with. Default is 'en'.
   * @opt_param bool indent
   * Whether to indent the json results or not.
   * @opt_param string filter
   * A filter to apply to the query.
   * @opt_param string callback
   * JS method name for JSONP callbacks.
   * @opt_param string without
   * A rule to not match against.
   * @opt_param int limit
   * Maximum number of results to return.
   * @opt_param string output
   * An output expression to request data from matches.
   * @opt_param string mql_output
   * The MQL query to run againist the results to extract more data.
   */
  public function search($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params));
  }
}
