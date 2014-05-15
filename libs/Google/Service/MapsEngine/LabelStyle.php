<?php 
namespace Google\Service\MapsEngine;
class LabelStyle extends \Google\Model
{
  public $color;
  public $column;
  public $fontStyle;
  public $fontWeight;
  public $opacity;
  protected $outlineType = 'Google\Service\MapsEngine\Color';
  protected $outlineDataType = '';
  public $size;

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setColumn($column)
  {
    $this->column = $column;
  }

  public function getColumn()
  {
    return $this->column;
  }

  public function setFontStyle($fontStyle)
  {
    $this->fontStyle = $fontStyle;
  }

  public function getFontStyle()
  {
    return $this->fontStyle;
  }

  public function setFontWeight($fontWeight)
  {
    $this->fontWeight = $fontWeight;
  }

  public function getFontWeight()
  {
    return $this->fontWeight;
  }

  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }

  public function getOpacity()
  {
    return $this->opacity;
  }

  public function setOutline(\Google\Service\MapsEngine\Color $outline)
  {
    $this->outline = $outline;
  }

  public function getOutline()
  {
    return $this->outline;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getSize()
  {
    return $this->size;
  }
}
