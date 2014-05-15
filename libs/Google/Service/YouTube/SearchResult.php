<?php 
namespace Google\Service\YouTube;
class SearchResult extends \Google\Model
{
  public $etag;
  protected $idType = 'Google\Service\YouTube\ResourceId';
  protected $idDataType = '';
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\SearchResultSnippet';
  protected $snippetDataType = '';

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setId(\Google\Service\YouTube\ResourceId $id)
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

  public function setSnippet(\Google\Service\YouTube\SearchResultSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }
}
