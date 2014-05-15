<?php 
namespace Google\Service\GroupsMigration;
class Groups extends \Google\Model
{
  public $kind;
  public $responseCode;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setResponseCode($responseCode)
  {
    $this->responseCode = $responseCode;
  }

  public function getResponseCode()
  {
    return $this->responseCode;
  }
}
