<?php 
namespace Google\Service\Resourceviews;
class ResourceView extends \Google\Collection
{
  public $creationTime;
  public $description;
  public $id;
  protected $labelsType = 'Google\Service\Resourceviews\Label';
  protected $labelsDataType = 'array';
  public $lastModified;
  public $members;
  public $name;
  public $numMembers;
  public $selfLink;

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
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

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLastModified($lastModified)
  {
    $this->lastModified = $lastModified;
  }

  public function getLastModified()
  {
    return $this->lastModified;
  }

  public function setMembers($members)
  {
    $this->members = $members;
  }

  public function getMembers()
  {
    return $this->members;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNumMembers($numMembers)
  {
    $this->numMembers = $numMembers;
  }

  public function getNumMembers()
  {
    return $this->numMembers;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
