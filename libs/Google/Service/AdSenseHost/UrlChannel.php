<?php 
namespace Google\Service\AdSenseHost;
class UrlChannel extends \Google\Model
{
  public $id;
  public $kind;
  public $urlPattern;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUrlPattern($urlPattern)
  {
    $this->urlPattern = $urlPattern;
  }

  public function getUrlPattern()
  {
    return $this->urlPattern;
  }
}
