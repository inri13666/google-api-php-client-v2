<?php 
namespace Google\Service\SiteVerification;
class SiteVerificationWebResourceListResponse extends \Google\Collection
{
  protected $itemsType = 'Google\Service\SiteVerification\SiteVerificationWebResourceResource';
  protected $itemsDataType = 'array';

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }
}
