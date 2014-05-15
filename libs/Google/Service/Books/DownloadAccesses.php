<?php 
namespace Google\Service\Books;
class DownloadAccesses extends \Google\Collection
{
  protected $downloadAccessListType = 'Google\Service\Books\DownloadAccessRestriction';
  protected $downloadAccessListDataType = 'array';
  public $kind;

  public function setDownloadAccessList($downloadAccessList)
  {
    $this->downloadAccessList = $downloadAccessList;
  }

  public function getDownloadAccessList()
  {
    return $this->downloadAccessList;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
