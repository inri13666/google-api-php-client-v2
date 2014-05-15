<?php 
namespace Google\Service\Calendar;
class ColorDefinition extends \Google\Model
{
  public $background;
  public $foreground;

  public function setBackground($background)
  {
    $this->background = $background;
  }

  public function getBackground()
  {
    return $this->background;
  }

  public function setForeground($foreground)
  {
    $this->foreground = $foreground;
  }

  public function getForeground()
  {
    return $this->foreground;
  }
}
