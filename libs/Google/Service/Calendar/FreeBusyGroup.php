<?php 
namespace Google\Service\Calendar;
class FreeBusyGroup extends \Google\Collection
{
  public $calendars;
  protected $errorsType = 'Google\Service\Calendar\Error';
  protected $errorsDataType = 'array';

  public function setCalendars($calendars)
  {
    $this->calendars = $calendars;
  }

  public function getCalendars()
  {
    return $this->calendars;
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
