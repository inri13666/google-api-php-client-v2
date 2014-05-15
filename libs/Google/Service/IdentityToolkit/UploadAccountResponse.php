<?php 
namespace Google\Service\IdentityToolkit;
class UploadAccountResponse extends \Google\Collection
{
  protected $errorType = 'Google\Service\IdentityToolkit\UploadAccountResponseError';
  protected $errorDataType = 'array';
  public $kind;

  public function setError($error)
  {
    $this->error = $error;
  }

  public function getError()
  {
    return $this->error;
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
