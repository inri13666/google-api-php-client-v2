<?php 
namespace Google\Service\YouTube;
class I18nRegion extends \Google\Model
{
  public $etag;
  public $id;
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\I18nRegionSnippet';
  protected $snippetDataType = '';

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

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

  public function setSnippet(\Google\Service\YouTube\I18nRegionSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }
}
