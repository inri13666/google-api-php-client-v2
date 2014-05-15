<?php 
namespace Google\Service\Reports;
class Activity extends \Google\Collection
{
  protected $actorType = 'Google\Service\Reports\ActivityActor';
  protected $actorDataType = '';
  public $etag;
  protected $eventsType = 'Google\Service\Reports\ActivityEvents';
  protected $eventsDataType = 'array';
  protected $idType = 'Google\Service\Reports\ActivityId';
  protected $idDataType = '';
  public $ipAddress;
  public $kind;
  public $ownerDomain;

  public function setActor(\Google\Service\Reports\ActivityActor $actor)
  {
    $this->actor = $actor;
  }

  public function getActor()
  {
    return $this->actor;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEvents($events)
  {
    $this->events = $events;
  }

  public function getEvents()
  {
    return $this->events;
  }

  public function setId(\Google\Service\Reports\ActivityId $id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }

  public function getIpAddress()
  {
    return $this->ipAddress;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setOwnerDomain($ownerDomain)
  {
    $this->ownerDomain = $ownerDomain;
  }

  public function getOwnerDomain()
  {
    return $this->ownerDomain;
  }
}
