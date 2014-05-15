<?php 
namespace Google\Service\Books;
class Annotationdata extends \Google\Model
{
  public $annotationType;
  public $data;
  public $encodedData;
  public $id;
  public $kind;
  public $layerId;
  public $selfLink;
  public $updated;
  public $volumeId;

  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }

  public function getAnnotationType()
  {
    return $this->annotationType;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setEncodedData($encodedData)
  {
    $this->encodedData = $encodedData;
  }

  public function getEncodedData()
  {
    return $this->encodedData;
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

  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }

  public function getVolumeId()
  {
    return $this->volumeId;
  }
}
