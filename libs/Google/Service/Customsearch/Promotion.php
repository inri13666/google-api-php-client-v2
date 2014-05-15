<?php 
namespace Google\Service\Customsearch;
class Promotion extends \Google\Collection
{
  protected $bodyLinesType = 'Google\Service\Customsearch\PromotionBodyLines';
  protected $bodyLinesDataType = 'array';
  public $displayLink;
  public $htmlTitle;
  protected $imageType = 'Google\Service\Customsearch\PromotionImage';
  protected $imageDataType = '';
  public $link;
  public $title;

  public function setBodyLines($bodyLines)
  {
    $this->bodyLines = $bodyLines;
  }

  public function getBodyLines()
  {
    return $this->bodyLines;
  }

  public function setDisplayLink($displayLink)
  {
    $this->displayLink = $displayLink;
  }

  public function getDisplayLink()
  {
    return $this->displayLink;
  }

  public function setHtmlTitle($htmlTitle)
  {
    $this->htmlTitle = $htmlTitle;
  }

  public function getHtmlTitle()
  {
    return $this->htmlTitle;
  }

  public function setImage(\Google\Service\Customsearch\PromotionImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
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
