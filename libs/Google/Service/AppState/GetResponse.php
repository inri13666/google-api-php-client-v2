<?php 
namespace Google\Service\AppState;
class GetResponse extends \Google\Model
{
  public $currentStateVersion;
  public $data;
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

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
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
