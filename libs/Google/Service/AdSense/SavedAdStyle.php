<?php 
namespace Google\Service\AdSense;
class SavedAdStyle extends \Google\Model
{
  protected $adStyleType = 'Google\Service\AdSense\AdStyle';
  protected $adStyleDataType = '';
  public $id;
  public $kind;
  public $name;

  public function setAdStyle(\Google\Service\AdSense\AdStyle $adStyle)
  {
    $this->adStyle = $adStyle;
  }

  public function getAdStyle()
  {
    return $this->adStyle;
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
}
