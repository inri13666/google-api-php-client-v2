<?php 
namespace Google\Service\YouTube;
class InvideoPromotion extends \Google\Collection
{
  protected $defaultTimingType = 'Google\Service\YouTube\InvideoTiming';
  protected $defaultTimingDataType = '';
  protected $itemsType = 'Google\Service\YouTube\PromotedItem';
  protected $itemsDataType = 'array';
  protected $positionType = 'Google\Service\YouTube\InvideoPosition';
  protected $positionDataType = '';

  public function setDefaultTiming(\Google\Service\YouTube\InvideoTiming $defaultTiming)
  {
    $this->defaultTiming = $defaultTiming;
  }

  public function getDefaultTiming()
  {
    return $this->defaultTiming;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setPosition(\Google\Service\YouTube\InvideoPosition $position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }
}
