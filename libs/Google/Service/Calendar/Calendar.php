<?php 
namespace Google\Service\Calendar;
class Calendar extends \Google\Model
{
  public $description;
  public $etag;
  public $id;
  public $kind;
  public $location;
  public $summary;
  public $timeZone;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
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

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setSummary($summary)
  {
    $this->summary = $summary;
  }

  public function getSummary()
  {
    return $this->summary;
  }

  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
  }
}
