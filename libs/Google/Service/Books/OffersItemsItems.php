<?php 
namespace Google\Service\Books;
class OffersItemsItems extends \Google\Model
{
  public $author;
  public $canonicalVolumeLink;
  public $coverUrl;
  public $description;
  public $title;
  public $volumeId;

  public function setAuthor($author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setCanonicalVolumeLink($canonicalVolumeLink)
  {
    $this->canonicalVolumeLink = $canonicalVolumeLink;
  }

  public function getCanonicalVolumeLink()
  {
    return $this->canonicalVolumeLink;
  }

  public function setCoverUrl($coverUrl)
  {
    $this->coverUrl = $coverUrl;
  }

  public function getCoverUrl()
  {
    return $this->coverUrl;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
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
