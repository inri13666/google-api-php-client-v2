<?php 
namespace Google\Service;
class Audit extends \Google\Service
{


  public $activities;
  

  /**
   * Constructs the internal representation of the Audit service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'apps/reporting/audit/v1/';
    $this->version = 'v1';
    $this->serviceName = 'audit';

    $this->activities = new \Google\Service\Audit\Resource\Activities(
        $this,
        $this->serviceName,
        'activities',
        array(
          'methods' => array(
            'list' => array(
              'path' => '{customerId}/{applicationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'actorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'actorApplicationId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'actorIpAddress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'caller' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'eventName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'continuationToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}
