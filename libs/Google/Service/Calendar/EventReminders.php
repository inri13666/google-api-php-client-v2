<?php 
namespace Google\Service\Calendar;
class EventReminders extends \Google\Collection
{
  protected $overridesType = 'Google\Service\Calendar\EventReminder';
  protected $overridesDataType = 'array';
  public $useDefault;

  public function setOverrides($overrides)
  {
    $this->overrides = $overrides;
  }

  public function getOverrides()
  {
    return $this->overrides;
  }

  public function setUseDefault($useDefault)
  {
    $this->useDefault = $useDefault;
  }

  public function getUseDefault()
  {
    return $this->useDefault;
  }
}
