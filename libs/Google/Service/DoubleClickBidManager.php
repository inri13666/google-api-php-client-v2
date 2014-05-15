<?php 
namespace Google\Service;
class DoubleClickBidManager extends \Google\Service
{


  public $lineitems;
  public $queries;
  public $reports;
  

  /**
   * Constructs the internal representation of the DoubleClickBidManager
   * service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'doubleclickbidmanager/v1/';
    $this->version = 'v1';
    $this->serviceName = 'doubleclickbidmanager';

    $this->lineitems = new \Google\Service\DoubleClickBidManager\Resource\Lineitems(
        $this,
        $this->serviceName,
        'lineitems',
        array(
          'methods' => array(
            'downloadlineitems' => array(
              'path' => 'lineitems/downloadlineitems',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'uploadlineitems' => array(
              'path' => 'lineitems/uploadlineitems',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->queries = new \Google\Service\DoubleClickBidManager\Resource\Queries(
        $this,
        $this->serviceName,
        'queries',
        array(
          'methods' => array(
            'createquery' => array(
              'path' => 'query',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'deletequery' => array(
              'path' => 'query/{queryId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'queryId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getquery' => array(
              'path' => 'query/{queryId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'queryId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'listqueries' => array(
              'path' => 'queries',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'runquery' => array(
              'path' => 'query/{queryId}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'queryId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->reports = new \Google\Service\DoubleClickBidManager\Resource\Reports(
        $this,
        $this->serviceName,
        'reports',
        array(
          'methods' => array(
            'listreports' => array(
              'path' => 'queries/{queryId}/reports',
              'httpMethod' => 'GET',
              'parameters' => array(
                'queryId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
