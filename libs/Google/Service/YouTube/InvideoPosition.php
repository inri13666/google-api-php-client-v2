<?php 
namespace Google\Service\YouTube;
class InvideoPosition extends \Google\Model
{
  public $cornerPosition;
  public $type;

  public function setCornerPosition($cornerPosition)
  {
    $this->cornerPosition = $cornerPosition;
  }

  public function getCornerPosition()
  {
    return $this->cornerPosition;
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
