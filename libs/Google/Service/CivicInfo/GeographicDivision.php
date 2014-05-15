<?php 
namespace Google\Service\CivicInfo;
class GeographicDivision extends \Google\Collection
{
  public $name;
  public $officeIds;
  public $scope;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficeIds($officeIds)
  {
    $this->officeIds = $officeIds;
  }

  public function getOfficeIds()
  {
    return $this->officeIds;
  }

  public function setScope($scope)
  {
    $this->scope = $scope;
  }

  public function getScope()
  {
    return $this->scope;
  }
}
