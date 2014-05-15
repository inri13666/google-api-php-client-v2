<?php 
namespace Google\Service;
class CivicInfo extends \Google\Service
{


  public $divisions;
  public $elections;
  public $representatives;
  

  /**
   * Constructs the internal representation of the CivicInfo service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'civicinfo/us_v1/';
    $this->version = 'us_v1';
    $this->serviceName = 'civicinfo';

    $this->divisions = new \Google\Service\CivicInfo\Resource\Divisions(
        $this,
        $this->serviceName,
        'divisions',
        array(
          'methods' => array(
            'search' => array(
              'path' => 'representatives/division_search',
              'httpMethod' => 'GET',
              'parameters' => array(
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->elections = new \Google\Service\CivicInfo\Resource\Elections(
        $this,
        $this->serviceName,
        'elections',
        array(
          'methods' => array(
            'electionQuery' => array(
              'path' => 'elections',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'voterInfoQuery' => array(
              'path' => 'voterinfo/{electionId}/lookup',
              'httpMethod' => 'POST',
              'parameters' => array(
                'electionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'officialOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->representatives = new \Google\Service\CivicInfo\Resource\Representatives(
        $this,
        $this->serviceName,
        'representatives',
        array(
          'methods' => array(
            'representativeInfoQuery' => array(
              'path' => 'representatives/lookup',
              'httpMethod' => 'POST',
              'parameters' => array(
                'ocdId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeOffices' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
  }
}
