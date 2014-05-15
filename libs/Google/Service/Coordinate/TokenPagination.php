<?php 
namespace Google\Service\Coordinate;
class TokenPagination extends \Google\Model
{
  public $kind;
  public $nextPageToken;
  public $previousPageToken;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setPreviousPageToken($previousPageToken)
  {
    $this->previousPageToken = $previousPageToken;
  }

  public function getPreviousPageToken()
  {
    return $this->previousPageToken;
  }
}
