<?php 
namespace Google\Service\Orkut;
class OrkutActivityobjectsResource extends \Google\Collection
{
  protected $communityType = 'Google\Service\Orkut\Community';
  protected $communityDataType = '';
  public $content;
  public $displayName;
  public $id;
  protected $linksType = 'Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  public $objectType;
  protected $personType = 'Google\Service\Orkut\OrkutActivitypersonResource';
  protected $personDataType = '';

  public function setCommunity(\Google\Service\Orkut\Community $community)
  {
    $this->community = $community;
  }

  public function getCommunity()
  {
    return $this->community;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLinks($links)
  {
    $this->links = $links;
  }

  public function getLinks()
  {
    return $this->links;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setPerson(\Google\Service\Orkut\OrkutActivitypersonResource $person)
  {
    $this->person = $person;
  }

  public function getPerson()
  {
    return $this->person;
  }
}
