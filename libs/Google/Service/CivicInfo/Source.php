<?php 
namespace Google\Service\CivicInfo;
class Source extends \Google\Model
{
  public $name;
  public $official;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficial($official)
  {
    $this->official = $official;
  }

  public function getOfficial()
  {
    return $this->official;
  }
}
