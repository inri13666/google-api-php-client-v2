<?php 
namespace Google\Service\Bigquery;
class JobStatus extends \Google\Collection
{
  protected $errorResultType = 'Google\Service\Bigquery\ErrorProto';
  protected $errorResultDataType = '';
  protected $errorsType = 'Google\Service\Bigquery\ErrorProto';
  protected $errorsDataType = 'array';
  public $state;

  public function setErrorResult(\Google\Service\Bigquery\ErrorProto $errorResult)
  {
    $this->errorResult = $errorResult;
  }

  public function getErrorResult()
  {
    return $this->errorResult;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
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
