<?php 
namespace Google\Service\QPXExpress;
class BagDescriptor extends \Google\Collection
{
  public $commercialName;
  public $count;
  public $description;
  public $kind;
  public $subcode;

  public function setCommercialName($commercialName)
  {
    $this->commercialName = $commercialName;
  }

  public function getCommercialName()
  {
    return $this->commercialName;
  }

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSubcode($subcode)
  {
    $this->subcode = $subcode;
  }

  public function getSubcode()
  {
    return $this->subcode;
  }
}
