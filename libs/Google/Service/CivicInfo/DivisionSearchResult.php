<?php 
namespace Google\Service\CivicInfo;
class DivisionSearchResult extends \Google\Model
{
  public $name;
  public $ocdId;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOcdId($ocdId)
  {
    $this->ocdId = $ocdId;
  }

  public function getOcdId()
  {
    return $this->ocdId;
  }
}
