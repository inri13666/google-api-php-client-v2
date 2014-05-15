<?php 
namespace Google\Service\Books;
class Layersummary extends \Google\Collection
{
  public $annotationCount;
  public $annotationTypes;
  public $annotationsDataLink;
  public $annotationsLink;
  public $contentVersion;
  public $dataCount;
  public $id;
  public $kind;
  public $layerId;
  public $selfLink;
  public $updated;
  public $volumeAnnotationsVersion;
  public $volumeId;

  public function setAnnotationCount($annotationCount)
  {
    $this->annotationCount = $annotationCount;
  }

  public function getAnnotationCount()
  {
    return $this->annotationCount;
  }

  public function setAnnotationTypes($annotationTypes)
  {
    $this->annotationTypes = $annotationTypes;
  }

  public function getAnnotationTypes()
  {
    return $this->annotationTypes;
  }

  public function setAnnotationsDataLink($annotationsDataLink)
  {
    $this->annotationsDataLink = $annotationsDataLink;
  }

  public function getAnnotationsDataLink()
  {
    return $this->annotationsDataLink;
  }

  public function setAnnotationsLink($annotationsLink)
  {
    $this->annotationsLink = $annotationsLink;
  }

  public function getAnnotationsLink()
  {
    return $this->annotationsLink;
  }

  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }

  public function getContentVersion()
  {
    return $this->contentVersion;
  }

  public function setDataCount($dataCount)
  {
    $this->dataCount = $dataCount;
  }

  public function getDataCount()
  {
    return $this->dataCount;
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

  public function setLayerId($layerId)
  {
    $this->layerId = $layerId;
  }

  public function getLayerId()
  {
    return $this->layerId;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setVolumeAnnotationsVersion($volumeAnnotationsVersion)
  {
    $this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
  }

  public function getVolumeAnnotationsVersion()
  {
    return $this->volumeAnnotationsVersion;
  }

  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }

  public function getVolumeId()
  {
    return $this->volumeId;
  }
}
