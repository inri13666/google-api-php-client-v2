<?php 
namespace Google\Service\Datastore;
class Filter extends \Google\Model
{
  protected $compositeFilterType = 'Google\Service\Datastore\CompositeFilter';
  protected $compositeFilterDataType = '';
  protected $propertyFilterType = 'Google\Service\Datastore\PropertyFilter';
  protected $propertyFilterDataType = '';

  public function setCompositeFilter(\Google\Service\Datastore\CompositeFilter $compositeFilter)
  {
    $this->compositeFilter = $compositeFilter;
  }

  public function getCompositeFilter()
  {
    return $this->compositeFilter;
  }

  public function setPropertyFilter(\Google\Service\Datastore\PropertyFilter $propertyFilter)
  {
    $this->propertyFilter = $propertyFilter;
  }

  public function getPropertyFilter()
  {
    return $this->propertyFilter;
  }
}
