<?php 
namespace Google\Service\Dns;
class ChangesListResponse extends \Google\Collection
{
  protected $changesType = 'Google\Service\Dns\Change';
  protected $changesDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setChanges($changes)
  {
    $this->changes = $changes;
  }

  public function getChanges()
  {
    return $this->changes;
  }

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
}
