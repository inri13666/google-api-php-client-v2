<?php 
namespace Google\Service\Games;
class TurnBasedMatchData extends \Google\Model
{
  public $data;
  public $dataAvailable;
  public $kind;

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setDataAvailable($dataAvailable)
  {
    $this->dataAvailable = $dataAvailable;
  }

  public function getDataAvailable()
  {
    return $this->dataAvailable;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
