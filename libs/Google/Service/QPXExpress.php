<?php 
namespace Google\Service;
class QPXExpress extends \Google\Service
{


  public $trips;
  

  /**
   * Constructs the internal representation of the QPXExpress service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'qpxExpress/v1/trips/';
    $this->version = 'v1';
    $this->serviceName = 'qpxExpress';

    $this->trips = new \Google\Service\QPXExpress\Resource\Trips(
        $this,
        $this->serviceName,
        'trips',
        array(
          'methods' => array(
            'search' => array(
              'path' => 'search',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
