<?php 
namespace Google\Service\PlusDomains;
class Audience extends \Google\Model
{
  public $etag;
  protected $itemType = 'Google\Service\PlusDomains\PlusDomainsAclentryResource';
  protected $itemDataType = '';
  public $kind;
  public $memberCount;
  public $visibility;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setItem(\Google\Service\PlusDomains\PlusDomainsAclentryResource $item)
  {
    $this->item = $item;
  }

  public function getItem()
  {
    return $this->item;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMemberCount($memberCount)
  {
    $this->memberCount = $memberCount;
  }

  public function getMemberCount()
  {
    return $this->memberCount;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }
}
