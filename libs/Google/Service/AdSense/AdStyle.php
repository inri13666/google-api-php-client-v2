<?php 
namespace Google\Service\AdSense;
class AdStyle extends \Google\Model
{
  protected $colorsType = 'Google\Service\AdSense\AdStyleColors';
  protected $colorsDataType = '';
  public $corners;
  protected $fontType = 'Google\Service\AdSense\AdStyleFont';
  protected $fontDataType = '';
  public $kind;

  public function setColors(\Google\Service\AdSense\AdStyleColors $colors)
  {
    $this->colors = $colors;
  }

  public function getColors()
  {
    return $this->colors;
  }

  public function setCorners($corners)
  {
    $this->corners = $corners;
  }

  public function getCorners()
  {
    return $this->corners;
  }

  public function setFont(\Google\Service\AdSense\AdStyleFont $font)
  {
    $this->font = $font;
  }

  public function getFont()
  {
    return $this->font;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
