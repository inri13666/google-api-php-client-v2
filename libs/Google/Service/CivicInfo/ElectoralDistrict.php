<?php 
namespace Google\Service\CivicInfo;
class ElectoralDistrict extends \Google\Model
{
  public $id;
  public $name;
  public $scope;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
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
