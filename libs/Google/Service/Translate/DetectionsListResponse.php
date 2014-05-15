<?php 
namespace Google\Service\Translate;
class DetectionsListResponse extends \Google\Collection
{
  protected $detectionsType = 'Google\Service\Translate\DetectionsResourceItems';
  protected $detectionsDataType = 'array';

  public function setDetections($detections)
  {
    $this->detections = $detections;
  }

  public function getDetections()
  {
    return $this->detections;
  }
}
