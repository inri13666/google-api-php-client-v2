<?php 
namespace Google\Service\Calendar;
class EventOrganizer extends \Google\Model
{
  public $displayName;
  public $email;
  public $id;
  public $self;

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setSelf($self)
  {
    $this->self = $self;
  }

  public function getSelf()
  {
    return $this->self;
  }
}
