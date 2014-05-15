<?php 
namespace Google\Service\Books;
class AnnotationsSummary extends \Google\Collection
{
  public $kind;
  protected $layersType = 'Google\Service\Books\AnnotationsSummaryLayers';
  protected $layersDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLayers($layers)
  {
    $this->layers = $layers;
  }

  public function getLayers()
  {
    return $this->layers;
  }
}
