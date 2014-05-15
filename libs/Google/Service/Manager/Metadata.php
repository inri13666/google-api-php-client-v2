<?php 
namespace Google\Service\Manager;
class Metadata extends \Google\Collection
{
  public $fingerPrint;
  protected $itemsType = 'Google\Service\Manager\MetadataItem';
  protected $itemsDataType = 'array';

  public function setFingerPrint($fingerPrint)
  {
    $this->fingerPrint = $fingerPrint;
  }

  public function getFingerPrint()
  {
    return $this->fingerPrint;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }
}
