<?php 
namespace Google\Service\Compute;
class SerialPortOutput extends \Google\Model
{
  public $contents;
  public $kind;
  public $selfLink;

  public function setContents($contents)
  {
    $this->contents = $contents;
  }

  public function getContents()
  {
    return $this->contents;
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
}
