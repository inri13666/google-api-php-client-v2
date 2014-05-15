<?php 
namespace Google\Service\Plus;
class ActivityObjectResharers extends \Google\Model
{
  public $selfLink;
  public $totalItems;

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
