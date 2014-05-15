<?php 
namespace Google\Service\Compute;
class DeprecationStatus extends \Google\Model
{
  public $deleted;
  public $deprecated;
  public $obsolete;
  public $replacement;
  public $state;

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getDeleted()
  {
    return $this->deleted;
  }

  public function setDeprecated($deprecated)
  {
    $this->deprecated = $deprecated;
  }

  public function getDeprecated()
  {
    return $this->deprecated;
  }

  public function setObsolete($obsolete)
  {
    $this->obsolete = $obsolete;
  }

  public function getObsolete()
  {
    return $this->obsolete;
  }

  public function setReplacement($replacement)
  {
    $this->replacement = $replacement;
  }

  public function getReplacement()
  {
    return $this->replacement;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}
