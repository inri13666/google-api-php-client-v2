<?php 
namespace Google\Service\Datastore;
class PropertyExpression extends \Google\Model
{
  public $aggregationFunction;
  protected $propertyType = 'Google\Service\Datastore\PropertyReference';
  protected $propertyDataType = '';

  public function setAggregationFunction($aggregationFunction)
  {
    $this->aggregationFunction = $aggregationFunction;
  }

  public function getAggregationFunction()
  {
    return $this->aggregationFunction;
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
