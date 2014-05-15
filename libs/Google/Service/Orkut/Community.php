<?php 
namespace Google\Service\Orkut;
class Community extends \Google\Collection
{
  public $category;
  protected $coOwnersType = 'Google\Service\Orkut\OrkutAuthorResource';
  protected $coOwnersDataType = 'array';
  public $creationDate;
  public $description;
  public $id;
  public $kind;
  public $language;
  protected $linksType = 'Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  public $location;
  public $memberCount;
  protected $moderatorsType = 'Google\Service\Orkut\OrkutAuthorResource';
  protected $moderatorsDataType = 'array';
  public $name;
  protected $ownerType = 'Google\Service\Orkut\OrkutAuthorResource';
  protected $ownerDataType = '';
  public $photoUrl;

  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setCoOwners($coOwners)
  {
    $this->coOwners = $coOwners;
  }

  public function getCoOwners()
  {
    return $this->coOwners;
  }

  public function setCreationDate($creationDate)
  {
    $this->creationDate = $creationDate;
  }

  public function getCreationDate()
  {
    return $this->creationDate;
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

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function setLinks($links)
  {
    $this->links = $links;
  }

  public function getLinks()
  {
    return $this->links;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setMemberCount($memberCount)
  {
    $this->memberCount = $memberCount;
  }

  public function getMemberCount()
  {
    return $this->memberCount;
  }

  public function setModerators($moderators)
  {
    $this->moderators = $moderators;
  }

  public function getModerators()
  {
    return $this->moderators;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOwner(\Google\Service\Orkut\OrkutAuthorResource $owner)
  {
    $this->owner = $owner;
  }

  public function getOwner()
  {
    return $this->owner;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
}
