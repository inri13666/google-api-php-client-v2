<?php 
namespace Google\Service\Books;
class GeolayerdataCommon extends \Google\Model
{
  public $lang;
  public $previewImageUrl;
  public $snippet;
  public $snippetUrl;
  public $title;

  public function setLang($lang)
  {
    $this->lang = $lang;
  }

  public function getLang()
  {
    return $this->lang;
  }

  public function setPreviewImageUrl($previewImageUrl)
  {
    $this->previewImageUrl = $previewImageUrl;
  }

  public function getPreviewImageUrl()
  {
    return $this->previewImageUrl;
  }

  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setSnippetUrl($snippetUrl)
  {
    $this->snippetUrl = $snippetUrl;
  }

  public function getSnippetUrl()
  {
    return $this->snippetUrl;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
