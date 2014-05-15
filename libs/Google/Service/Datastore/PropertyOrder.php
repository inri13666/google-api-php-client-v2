<?php 
namespace Google\Service\Datastore;
class PropertyOrder extends \Google\Model
{
  public $direction;
  protected $propertyType = 'Google\Service\Datastore\PropertyReference';
  protected $propertyDataType = '';

  public function setDirection($direction)
  {
    $this->direction = $direction;
  }

  public function getDirection()
  {
    return $this->direction;
  }

  public function setProperty(\Google\Service\Datastore\PropertyReference $property)
  {
    $this->property = $property;
  }

  public function getProperty()
  {
    return $this->property;
  }
}
