<?php 
namespace Google\Service\Coordinate;
class CustomFieldDef extends \Google\Model
{
  public $enabled;
  public $id;
  public $kind;
  public $name;
  public $requiredForCheckout;
  public $type;

  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }

  public function getEnabled()
  {
    return $this->enabled;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setRequiredForCheckout($requiredForCheckout)
  {
    $this->requiredForCheckout = $requiredForCheckout;
  }

  public function getRequiredForCheckout()
  {
    return $this->requiredForCheckout;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
