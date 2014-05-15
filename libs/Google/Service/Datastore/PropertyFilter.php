<?php 
namespace Google\Service\Datastore;
class PropertyFilter extends \Google\Model
{
  public $operator;
  protected $propertyType = 'Google\Service\Datastore\PropertyReference';
  protected $propertyDataType = '';
  protected $valueType = 'Google\Service\Datastore\Value';
  protected $valueDataType = '';

  public function setOperator($operator)
  {
    $this->operator = $operator;
  }

  public function getOperator()
  {
    return $this->operator;
  }

  public function setProperty(\Google\Service\Datastore\PropertyReference $property)
  {
    $this->property = $property;
  }

  public function getProperty()
  {
    return $this->property;
  }

  public function setValue(\Google\Service\Datastore\Value $value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}
