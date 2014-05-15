<?php 
namespace Google\Service\Reports;
class UsageReportsWarnings extends \Google\Collection
{
  public $code;
  protected $dataType = 'Google\Service\Reports\UsageReportsWarningsData';
  protected $dataDataType = 'array';
  public $message;

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
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
