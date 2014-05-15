<?php 
namespace Google\Service\Books;
class RequestAccess extends \Google\Model
{
  protected $concurrentAccessType = 'Google\Service\Books\ConcurrentAccessRestriction';
  protected $concurrentAccessDataType = '';
  protected $downloadAccessType = 'Google\Service\Books\DownloadAccessRestriction';
  protected $downloadAccessDataType = '';
  public $kind;

  public function setConcurrentAccess(\Google\Service\Books\ConcurrentAccessRestriction $concurrentAccess)
  {
    $this->concurrentAccess = $concurrentAccess;
  }

  public function getConcurrentAccess()
  {
    return $this->concurrentAccess;
  }

  public function setDownloadAccess(\Google\Service\Books\DownloadAccessRestriction $downloadAccess)
  {
    $this->downloadAccess = $downloadAccess;
  }

  public function getDownloadAccess()
  {
    return $this->downloadAccess;
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
