<?php 
namespace Google\Service\PlusDomains;
class Circle extends \Google\Model
{
  public $description;
  public $displayName;
  public $etag;
  public $id;
  public $kind;
  protected $peopleType = 'Google\Service\PlusDomains\CirclePeople';
  protected $peopleDataType = '';
  public $selfLink;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setPeople(\Google\Service\PlusDomains\CirclePeople $people)
  {
    $this->people = $people;
  }

  public function getPeople()
  {
    return $this->people;
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
