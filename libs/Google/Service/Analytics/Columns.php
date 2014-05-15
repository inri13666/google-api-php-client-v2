<?php 
namespace Google\Service\Analytics;
class Columns extends \Google\Collection
{
  public $attributeNames;
  public $etag;
  protected $itemsType = 'Google\Service\Analytics\Column';
  protected $itemsDataType = 'array';
  public $kind;
  public $totalResults;

  public function setAttributeNames($attributeNames)
  {
    $this->attributeNames = $attributeNames;
  }

  public function getAttributeNames()
  {
    return $this->attributeNames;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }

  public function getTotalResults()
  {
    return $this->totalResults;
  }
}
