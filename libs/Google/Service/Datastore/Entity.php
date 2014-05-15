<?php 
namespace Google\Service\Datastore;
class Entity extends \Google\Model
{
  protected $keyType = 'Google\Service\Datastore\Key';
  protected $keyDataType = '';
  protected $propertiesType = 'Google\Service\Datastore\Property';
  protected $propertiesDataType = 'map';

  public function setKey(\Google\Service\Datastore\Key $key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setProperties($properties)
  {
    $this->properties = $properties;
  }

  public function getProperties()
  {
    return $this->properties;
  }
}
