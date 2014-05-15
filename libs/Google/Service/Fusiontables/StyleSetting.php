<?php 
namespace Google\Service\Fusiontables;
class StyleSetting extends \Google\Model
{
  public $kind;
  protected $markerOptionsType = 'Google\Service\Fusiontables\PointStyle';
  protected $markerOptionsDataType = '';
  public $name;
  protected $polygonOptionsType = 'Google\Service\Fusiontables\PolygonStyle';
  protected $polygonOptionsDataType = '';
  protected $polylineOptionsType = 'Google\Service\Fusiontables\LineStyle';
  protected $polylineOptionsDataType = '';
  public $styleId;
  public $tableId;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMarkerOptions(\Google\Service\Fusiontables\PointStyle $markerOptions)
  {
    $this->markerOptions = $markerOptions;
  }

  public function getMarkerOptions()
  {
    return $this->markerOptions;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPolygonOptions(\Google\Service\Fusiontables\PolygonStyle $polygonOptions)
  {
    $this->polygonOptions = $polygonOptions;
  }

  public function getPolygonOptions()
  {
    return $this->polygonOptions;
  }

  public function setPolylineOptions(\Google\Service\Fusiontables\LineStyle $polylineOptions)
  {
    $this->polylineOptions = $polylineOptions;
  }

  public function getPolylineOptions()
  {
    return $this->polylineOptions;
  }

  public function setStyleId($styleId)
  {
    $this->styleId = $styleId;
  }

  public function getStyleId()
  {
    return $this->styleId;
  }

  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }

  public function getTableId()
  {
    return $this->tableId;
  }
}
