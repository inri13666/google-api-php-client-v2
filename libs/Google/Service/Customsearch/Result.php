<?php 
namespace Google\Service\Customsearch;
class Result extends \Google\Collection
{
  public $cacheId;
  public $displayLink;
  public $fileFormat;
  public $formattedUrl;
  public $htmlFormattedUrl;
  public $htmlSnippet;
  public $htmlTitle;
  protected $imageType = 'Google\Service\Customsearch\ResultImage';
  protected $imageDataType = '';
  public $kind;
  protected $labelsType = 'Google\Service\Customsearch\ResultLabels';
  protected $labelsDataType = 'array';
  public $link;
  public $mime;
  public $pagemap;
  public $snippet;
  public $title;

  public function setCacheId($cacheId)
  {
    $this->cacheId = $cacheId;
  }

  public function getCacheId()
  {
    return $this->cacheId;
  }

  public function setDisplayLink($displayLink)
  {
    $this->displayLink = $displayLink;
  }

  public function getDisplayLink()
  {
    return $this->displayLink;
  }

  public function setFileFormat($fileFormat)
  {
    $this->fileFormat = $fileFormat;
  }

  public function getFileFormat()
  {
    return $this->fileFormat;
  }

  public function setFormattedUrl($formattedUrl)
  {
    $this->formattedUrl = $formattedUrl;
  }

  public function getFormattedUrl()
  {
    return $this->formattedUrl;
  }

  public function setHtmlFormattedUrl($htmlFormattedUrl)
  {
    $this->htmlFormattedUrl = $htmlFormattedUrl;
  }

  public function getHtmlFormattedUrl()
  {
    return $this->htmlFormattedUrl;
  }

  public function setHtmlSnippet($htmlSnippet)
  {
    $this->htmlSnippet = $htmlSnippet;
  }

  public function getHtmlSnippet()
  {
    return $this->htmlSnippet;
  }

  public function setHtmlTitle($htmlTitle)
  {
    $this->htmlTitle = $htmlTitle;
  }

  public function getHtmlTitle()
  {
    return $this->htmlTitle;
  }

  public function setImage(\Google\Service\Customsearch\ResultImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setMime($mime)
  {
    $this->mime = $mime;
  }

  public function getMime()
  {
    return $this->mime;
  }

  public function setPagemap($pagemap)
  {
    $this->pagemap = $pagemap;
  }

  public function getPagemap()
  {
    return $this->pagemap;
  }

  public function setSnippet($snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
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
