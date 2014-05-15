<?php 
namespace Google\Service\Fusiontables;
class PointStyle extends \Google\Model
{
  public $iconName;
  protected $iconStylerType = 'Google\Service\Fusiontables\StyleFunction';
  protected $iconStylerDataType = '';

  public function setIconName($iconName)
  {
    $this->iconName = $iconName;
  }

  public function getIconName()
  {
    return $this->iconName;
  }

  public function setIconStyler(\Google\Service\Fusiontables\StyleFunction $iconStyler)
  {
    $this->iconStyler = $iconStyler;
  }

  public function getIconStyler()
  {
    return $this->iconStyler;
  }
}
