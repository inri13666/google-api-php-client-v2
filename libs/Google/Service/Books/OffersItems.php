<?php 
namespace Google\Service\Books;
class OffersItems extends \Google\Collection
{
  public $artUrl;
  public $id;
  protected $itemsType = 'Google\Service\Books\OffersItemsItems';
  protected $itemsDataType = 'array';

  public function setArtUrl($artUrl)
  {
    $this->artUrl = $artUrl;
  }

  public function getArtUrl()
  {
    return $this->artUrl;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
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
