<?php 
namespace Google\Service\Mirror;
class Contact extends \Google\Collection
{
  protected $acceptCommandsType = 'Google\Service\Mirror\Command';
  protected $acceptCommandsDataType = 'array';
  public $acceptTypes;
  public $displayName;
  public $id;
  public $imageUrls;
  public $kind;
  public $phoneNumber;
  public $priority;
  public $sharingFeatures;
  public $source;
  public $speakableName;
  public $type;

  public function setAcceptCommands($acceptCommands)
  {
    $this->acceptCommands = $acceptCommands;
  }

  public function getAcceptCommands()
  {
    return $this->acceptCommands;
  }

  public function setAcceptTypes($acceptTypes)
  {
    $this->acceptTypes = $acceptTypes;
  }

  public function getAcceptTypes()
  {
    return $this->acceptTypes;
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

  public function setImageUrls($imageUrls)
  {
    $this->imageUrls = $imageUrls;
  }

  public function getImageUrls()
  {
    return $this->imageUrls;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPriority($priority)
  {
    $this->priority = $priority;
  }

  public function getPriority()
  {
    return $this->priority;
  }

  public function setSharingFeatures($sharingFeatures)
  {
    $this->sharingFeatures = $sharingFeatures;
  }

  public function getSharingFeatures()
  {
    return $this->sharingFeatures;
  }

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setSpeakableName($speakableName)
  {
    $this->speakableName = $speakableName;
  }

  public function getSpeakableName()
  {
    return $this->speakableName;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
