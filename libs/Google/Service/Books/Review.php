<?php 
namespace Google\Service\Books;
class Review extends \Google\Model
{
  protected $authorType = 'Google\Service\Books\ReviewAuthor';
  protected $authorDataType = '';
  public $content;
  public $date;
  public $fullTextUrl;
  public $kind;
  public $rating;
  protected $sourceType = 'Google\Service\Books\ReviewSource';
  protected $sourceDataType = '';
  public $title;
  public $type;
  public $volumeId;

  public function setAuthor(\Google\Service\Books\ReviewAuthor $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setFullTextUrl($fullTextUrl)
  {
    $this->fullTextUrl = $fullTextUrl;
  }

  public function getFullTextUrl()
  {
    return $this->fullTextUrl;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRating($rating)
  {
    $this->rating = $rating;
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function setSource(\Google\Service\Books\ReviewSource $source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }

  public function getVolumeId()
  {
    return $this->volumeId;
  }
}
