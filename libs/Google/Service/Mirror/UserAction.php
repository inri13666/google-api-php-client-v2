<?php 
namespace Google\Service\Mirror;
class UserAction extends \Google\Model
{
  public $payload;
  public $type;

  public function setPayload($payload)
  {
    $this->payload = $payload;
  }

  public function getPayload()
  {
    return $this->payload;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
