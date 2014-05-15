<?php 
namespace Google\Service\YouTube;
class SubscriptionContentDetails extends \Google\Model
{
  public $activityType;
  public $newItemCount;
  public $totalItemCount;

  public function setActivityType($activityType)
  {
    $this->activityType = $activityType;
  }

  public function getActivityType()
  {
    return $this->activityType;
  }

  public function setNewItemCount($newItemCount)
  {
    $this->newItemCount = $newItemCount;
  }

  public function getNewItemCount()
  {
    return $this->newItemCount;
  }

  public function setTotalItemCount($totalItemCount)
  {
    $this->totalItemCount = $totalItemCount;
  }

  public function getTotalItemCount()
  {
    return $this->totalItemCount;
  }
}
