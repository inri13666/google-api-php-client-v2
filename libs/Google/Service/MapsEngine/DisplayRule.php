<?php 
namespace Google\Service\MapsEngine;
class DisplayRule extends \Google\Collection
{
  protected $filtersType = 'Google\Service\MapsEngine\Filter';
  protected $filtersDataType = 'array';
  protected $lineOptionsType = 'Google\Service\MapsEngine\LineStyle';
  protected $lineOptionsDataType = '';
  public $name;
  protected $pointOptionsType = 'Google\Service\MapsEngine\PointStyle';
  protected $pointOptionsDataType = '';
  protected $polygonOptionsType = 'Google\Service\MapsEngine\PolygonStyle';
  protected $polygonOptionsDataType = '';
  protected $zoomLevelsType = 'Google\Service\MapsEngine\ZoomLevels';
  protected $zoomLevelsDataType = '';

  public function setFilters($filters)
  {
    $this->filters = $filters;
  }

  public function getFilters()
  {
    return $this->filters;
  }

  public function setLineOptions(\Google\Service\MapsEngine\LineStyle $lineOptions)
  {
    $this->lineOptions = $lineOptions;
  }

  public function getLineOptions()
  {
    return $this->lineOptions;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPointOptions(\Google\Service\MapsEngine\PointStyle $pointOptions)
  {
    $this->pointOptions = $pointOptions;
  }

  public function getPointOptions()
  {
    return $this->pointOptions;
  }

  public function setPolygonOptions(\Google\Service\MapsEngine\PolygonStyle $polygonOptions)
  {
    $this->polygonOptions = $polygonOptions;
  }

  public function getPolygonOptions()
  {
    return $this->polygonOptions;
  }

  public function setZoomLevels(\Google\Service\MapsEngine\ZoomLevels $zoomLevels)
  {
    $this->zoomLevels = $zoomLevels;
  }

  public function getZoomLevels()
  {
    return $this->zoomLevels;
  }
}
