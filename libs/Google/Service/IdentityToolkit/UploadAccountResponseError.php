<?php 
namespace Google\Service\IdentityToolkit;
class UploadAccountResponseError extends \Google\Model
{
  public $index;
  public $message;

  public function setIndex($index)
  {
    $this->index = $index;
  }

  public function getIndex()
  {
    return $this->index;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }
}
