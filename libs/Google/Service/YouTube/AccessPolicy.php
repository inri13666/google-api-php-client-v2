<?php 
namespace Google\Service\YouTube;
class AccessPolicy extends \Google\Collection
{
  public $allowed;
  public $exception;

  public function setAllowed($allowed)
  {
    $this->allowed = $allowed;
  }

  public function getAllowed()
  {
    return $this->allowed;
  }

  public function setException($exception)
  {
    $this->exception = $exception;
  }

  public function getException()
  {
    return $this->exception;
  }
}
