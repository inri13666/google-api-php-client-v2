<?php 
namespace Google\Service\Calendar;
class FreeBusyCalendar extends \Google\Collection
{
  protected $busyType = 'Google\Service\Calendar\TimePeriod';
  protected $busyDataType = 'array';
  protected $errorsType = 'Google\Service\Calendar\Error';
  protected $errorsDataType = 'array';

  public function setBusy($busy)
  {
    $this->busy = $busy;
  }

  public function getBusy()
  {
    return $this->busy;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }
}
