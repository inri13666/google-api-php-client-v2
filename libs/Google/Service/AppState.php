<?php 
namespace Google\Service;
class AppState extends \Google\Service
{
  /** View and manage your data for this application. */
  const APPSTATE = "https://www.googleapis.com/auth/appstate";

  public $states;
  

  /**
   * Constructs the internal representation of the AppState service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'appstate/v1/';
    $this->version = 'v1';
    $this->serviceName = 'appstate';

    $this->states = new \Google\Service\AppState\Resource\States(
        $this,
        $this->serviceName,
        'states',
        array(
          'methods' => array(
            'clear' => array(
              'path' => 'states/{stateKey}/clear',
              'httpMethod' => 'POST',
              'parameters' => array(
                'stateKey' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'currentDataVersion' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'delete' => array(
              'path' => 'states/{stateKey}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'stateKey' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'states/{stateKey}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'stateKey' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'states',
              'httpMethod' => 'GET',
              'parameters' => array(
                'includeData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'states/{stateKey}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'stateKey' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'currentStateVersion' => array(
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
