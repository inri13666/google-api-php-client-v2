<?php 
namespace Google\Service\Resourceviews;
class ZoneViewsListResourcesResponse extends \Google\Collection
{
  public $members;
  public $nextPageToken;

  public function setMembers($members)
  {
    $this->members = $members;
  }

  public function getMembers()
  {
    return $this->members;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
