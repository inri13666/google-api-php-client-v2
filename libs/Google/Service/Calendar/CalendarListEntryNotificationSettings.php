<?php 
namespace Google\Service\Calendar;
class CalendarListEntryNotificationSettings extends \Google\Collection
{
  protected $notificationsType = 'Google\Service\Calendar\CalendarNotification';
  protected $notificationsDataType = 'array';

  public function setNotifications($notifications)
  {
    $this->notifications = $notifications;
  }

  public function getNotifications()
  {
    return $this->notifications;
  }
}
