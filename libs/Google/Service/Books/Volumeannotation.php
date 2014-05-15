<?php 
namespace Google\Service\Books;
class Volumeannotation extends \Google\Collection
{
  public $annotationDataId;
  public $annotationDataLink;
  public $annotationType;
  protected $contentRangesType = 'Google\Service\Books\VolumeannotationContentRanges';
  protected $contentRangesDataType = '';
  public $data;
  public $deleted;
  public $id;
  public $kind;
  public $layerId;
  public $pageIds;
  public $selectedText;
  public $selfLink;
  public $updated;
  public $volumeId;

  public function setAnnotationDataId($annotationDataId)
  {
    $this->annotationDataId = $annotationDataId;
  }

  public function getAnnotationDataId()
  {
    return $this->annotationDataId;
  }

  public function setAnnotationDataLink($annotationDataLink)
  {
    $this->annotationDataLink = $annotationDataLink;
  }

  public function getAnnotationDataLink()
  {
    return $this->annotationDataLink;
  }

  public function setAnnotationType($annotationType)
  {
    $this->annotationType = $annotationType;
  }

  public function getAnnotationType()
  {
    return $this->annotationType;
  }

  public function setContentRanges(\Google\Service\Books\VolumeannotationContentRanges $contentRanges)
  {
    $this->contentRanges = $contentRanges;
  }

  public function getContentRanges()
  {
    return $this->contentRanges;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getDeleted()
  {
    return $this->deleted;
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

  public function setPageIds($pageIds)
  {
    $this->pageIds = $pageIds;
  }

  public function getPageIds()
  {
    return $this->pageIds;
  }

  public function setSelectedText($selectedText)
  {
    $this->selectedText = $selectedText;
  }

  public function getSelectedText()
  {
    return $this->selectedText;
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
