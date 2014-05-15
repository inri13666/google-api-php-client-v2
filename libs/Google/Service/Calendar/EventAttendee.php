<?php 
namespace Google\Service\Calendar;
class EventAttendee extends \Google\Model
{
  public $additionalGuests;
  public $comment;
  public $displayName;
  public $email;
  public $id;
  public $optional;
  public $organizer;
  public $resource;
  public $responseStatus;
  public $self;

  public function setAdditionalGuests($additionalGuests)
  {
    $this->additionalGuests = $additionalGuests;
  }

  public function getAdditionalGuests()
  {
    return $this->additionalGuests;
  }

  public function setComment($comment)
  {
    $this->comment = $comment;
  }

  public function getComment()
  {
    return $this->comment;
  }

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

  public function setOptional($optional)
  {
    $this->optional = $optional;
  }

  public function getOptional()
  {
    return $this->optional;
  }

  public function setOrganizer($organizer)
  {
    $this->organizer = $organizer;
  }

  public function getOrganizer()
  {
    return $this->organizer;
  }

  public function setResource($resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }

  public function setResponseStatus($responseStatus)
  {
    $this->responseStatus = $responseStatus;
  }

  public function getResponseStatus()
  {
    return $this->responseStatus;
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
