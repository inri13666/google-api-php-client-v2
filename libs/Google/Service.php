<?php 
namespace Google;
class Service
{
  public $version;
  public $servicePath;
  public $availableScopes;
  public $resource;
  private $client;

  public function __construct(\Google\Client $client)
  {
    $this->client = $client;
  }

  /**
   * Return the associated \Google\Client class.
   * @return \Google\Client
   */
  public function getClient()
  {
    return $this->client;
  }
}
