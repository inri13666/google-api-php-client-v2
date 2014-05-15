<?php 
namespace Google\Service\AdExchangeSeller;
class Metadata extends \Google\Collection
{
  protected $itemsType = 'Google\Service\AdExchangeSeller\ReportingMetadataEntry';
  protected $itemsDataType = 'array';
  public $kind;

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
}
