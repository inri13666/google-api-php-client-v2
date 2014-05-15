<?php 
namespace Google\Service;
class Webfonts extends \Google\Service
{


  public $webfonts;
  

  /**
   * Constructs the internal representation of the Webfonts service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'webfonts/v1/';
    $this->version = 'v1';
    $this->serviceName = 'webfonts';

    $this->webfonts = new \Google\Service\Webfonts\Resource\Webfonts(
        $this,
        $this->serviceName,
        'webfonts',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'webfonts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'sort' => array(
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
