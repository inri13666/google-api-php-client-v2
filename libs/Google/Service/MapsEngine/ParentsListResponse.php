<?php 
namespace Google\Service\MapsEngine;
class ParentsListResponse extends \Google\Collection
{
  public $nextPageToken;
  protected $parentsType = 'Google\Service\MapsEngine\Parent';
  protected $parentsDataType = 'array';

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setParents($parents)
  {
    $this->parents = $parents;
  }

  public function getParents()
  {
    return $this->parents;
  }
}
