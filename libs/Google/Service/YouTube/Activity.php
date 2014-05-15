<?php 
namespace Google\Service\YouTube;
class Activity extends \Google\Model
{
  protected $contentDetailsType = 'Google\Service\YouTube\ActivityContentDetails';
  protected $contentDetailsDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\ActivitySnippet';
  protected $snippetDataType = '';

  public function setContentDetails(\Google\Service\YouTube\ActivityContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }

  public function getContentDetails()
  {
    return $this->contentDetails;
  }

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

  public function setSnippet(\Google\Service\YouTube\ActivitySnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }
}
