<?php 
namespace Google\Service\Games;
class InstanceAndroidDetails extends \Google\Model
{
  public $enablePiracyCheck;
  public $kind;
  public $packageName;
  public $preferred;

  public function setEnablePiracyCheck($enablePiracyCheck)
  {
    $this->enablePiracyCheck = $enablePiracyCheck;
  }

  public function getEnablePiracyCheck()
  {
    return $this->enablePiracyCheck;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }

  public function getPackageName()
  {
    return $this->packageName;
  }

  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }

  public function getPreferred()
  {
    return $this->preferred;
  }
}
