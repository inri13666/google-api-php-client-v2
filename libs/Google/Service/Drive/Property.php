<?php 
namespace Google\Service\Drive;
class Property extends \Google\Model
{
  public $etag;
  public $key;
  public $kind;
  public $selfLink;
  public $value;
  public $visibility;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
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
