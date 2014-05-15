<?php 
namespace Google\Service\Books;
class ReviewSource extends \Google\Model
{
  public $description;
  public $extraDescription;
  public $url;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setExtraDescription($extraDescription)
  {
    $this->extraDescription = $extraDescription;
  }

  public function getExtraDescription()
  {
    return $this->extraDescription;
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
