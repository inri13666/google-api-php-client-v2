<?php 
namespace Google\Service\Books;
class Bookshelf extends \Google\Model
{
  public $access;
  public $created;
  public $description;
  public $id;
  public $kind;
  public $selfLink;
  public $title;
  public $updated;
  public $volumeCount;
  public $volumesLastUpdated;

  public function setAccess($access)
  {
    $this->access = $access;
  }

  public function getAccess()
  {
    return $this->access;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
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

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setVolumeCount($volumeCount)
  {
    $this->volumeCount = $volumeCount;
  }

  public function getVolumeCount()
  {
    return $this->volumeCount;
  }

  public function setVolumesLastUpdated($volumesLastUpdated)
  {
    $this->volumesLastUpdated = $volumesLastUpdated;
  }

  public function getVolumesLastUpdated()
  {
    return $this->volumesLastUpdated;
  }
}
