<?php 
namespace Google\Service\Compute;
class OperationError extends \Google\Collection
{
  protected $errorsType = 'Google\Service\Compute\OperationErrorErrors';
  protected $errorsDataType = 'array';

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }
}
