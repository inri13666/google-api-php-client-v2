<?php 
namespace Google\Service\MapsEngine;
class FeaturesListResponse extends \Google\Collection
{
  public $allowedQueriesPerSecond;
  protected $featuresType = 'Google\Service\MapsEngine\Feature';
  protected $featuresDataType = 'array';
  public $nextPageToken;
  protected $schemaType = 'Google\Service\MapsEngine\Schema';
  protected $schemaDataType = '';
  public $type;

  public function setAllowedQueriesPerSecond($allowedQueriesPerSecond)
  {
    $this->allowedQueriesPerSecond = $allowedQueriesPerSecond;
  }

  public function getAllowedQueriesPerSecond()
  {
    return $this->allowedQueriesPerSecond;
  }

  public function setFeatures($features)
  {
    $this->features = $features;
  }

  public function getFeatures()
  {
    return $this->features;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setSchema(\Google\Service\MapsEngine\Schema $schema)
  {
    $this->schema = $schema;
  }

  public function getSchema()
  {
    return $this->schema;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
