<?php 
namespace Google\Service\Analytics;
class EntityUserLinkPermissions extends \Google\Collection
{
  public $effective;
  public $local;

  public function setEffective($effective)
  {
    $this->effective = $effective;
  }

  public function getEffective()
  {
    return $this->effective;
  }

  public function setLocal($local)
  {
    $this->local = $local;
  }

  public function getLocal()
  {
    return $this->local;
  }
}
