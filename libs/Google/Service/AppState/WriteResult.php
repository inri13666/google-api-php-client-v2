<?php 
namespace Google\Service\AppState;
class WriteResult extends \Google\Model
{
  public $currentStateVersion;
  public $kind;
  public $stateKey;

  public function setCurrentStateVersion($currentStateVersion)
  {
    $this->currentStateVersion = $currentStateVersion;
  }

  public function getCurrentStateVersion()
  {
    return $this->currentStateVersion;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setStateKey($stateKey)
  {
    $this->stateKey = $stateKey;
  }

  public function getStateKey()
  {
    return $this->stateKey;
  }
}
