<?php 
namespace Google\Service\Books;
class Annotation extends \Google\Collection
{
  public $afterSelectedText;
  public $beforeSelectedText;
  protected $clientVersionRangesType = 'Google\Service\Books\AnnotationClientVersionRanges';
  protected $clientVersionRangesDataType = '';
  public $created;
  protected $currentVersionRangesType = 'Google\Service\Books\AnnotationCurrentVersionRanges';
  protected $currentVersionRangesDataType = '';
  public $data;
  public $deleted;
  public $highlightStyle;
  public $id;
  public $kind;
  public $layerId;
  protected $layerSummaryType = 'Google\Service\Books\AnnotationLayerSummary';
  protected $layerSummaryDataType = '';
  public $pageIds;
  public $selectedText;
  public $selfLink;
  public $updated;
  public $volumeId;

  public function setAfterSelectedText($afterSelectedText)
  {
    $this->afterSelectedText = $afterSelectedText;
  }

  public function getAfterSelectedText()
  {
    return $this->afterSelectedText;
  }

  public function setBeforeSelectedText($beforeSelectedText)
  {
    $this->beforeSelectedText = $beforeSelectedText;
  }

  public function getBeforeSelectedText()
  {
    return $this->beforeSelectedText;
  }

  public function setClientVersionRanges(\Google\Service\Books\AnnotationClientVersionRanges $clientVersionRanges)
  {
    $this->clientVersionRanges = $clientVersionRanges;
  }

  public function getClientVersionRanges()
  {
    return $this->clientVersionRanges;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setCurrentVersionRanges(\Google\Service\Books\AnnotationCurrentVersionRanges $currentVersionRanges)
  {
    $this->currentVersionRanges = $currentVersionRanges;
  }

  public function getCurrentVersionRanges()
  {
    return $this->currentVersionRanges;
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

  public function setHighlightStyle($highlightStyle)
  {
    $this->highlightStyle = $highlightStyle;
  }

  public function getHighlightStyle()
  {
    return $this->highlightStyle;
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

  public function setLayerSummary(\Google\Service\Books\AnnotationLayerSummary $layerSummary)
  {
    $this->layerSummary = $layerSummary;
  }

  public function getLayerSummary()
  {
    return $this->layerSummary;
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
