<?php 
namespace Google\Service\Calendar;
class EventExtendedProperties extends \Google\Model
{
  public $private;
  public $shared;

  public function setPrivate($private)
  {
    $this->private = $private;
  }

  public function getPrivate()
  {
    return $this->private;
  }

  public function setShared($shared)
  {
    $this->shared = $shared;
  }

  public function getShared()
  {
    return $this->shared;
  }
}
