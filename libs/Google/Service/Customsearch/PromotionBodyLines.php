<?php 
namespace Google\Service\Customsearch;
class PromotionBodyLines extends \Google\Model
{
  public $htmlTitle;
  public $link;
  public $title;
  public $url;

  public function setHtmlTitle($htmlTitle)
  {
    $this->htmlTitle = $htmlTitle;
  }

  public function getHtmlTitle()
  {
    return $this->htmlTitle;
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

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
