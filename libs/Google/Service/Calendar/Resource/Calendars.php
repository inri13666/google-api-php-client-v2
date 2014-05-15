<?php 
namespace Google\Service\Calendar\Resource;
class Calendars extends \Google\Resource\Service
{

  /**
   * Clears a primary calendar. This operation deletes all data associated with
   * the primary calendar of an account and cannot be undone. (calendars.clear)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   */
  public function clear($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('clear', array($params));
  }
  /**
   * Deletes a secondary calendar. (calendars.delete)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   */
  public function delete($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns metadata for a calendar. (calendars.get)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function get($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Calendar\Calendar');
  }
  /**
   * Creates a secondary calendar. (calendars.insert)
   *
   * @param Google_Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function insert(\Google\Service\Calendar\Calendar $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Calendar\Calendar');
  }
  /**
   * Updates metadata for a calendar. This method supports patch semantics.
   * (calendars.patch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param Google_Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function patch($calendarId, \Google\Service\Calendar\Calendar $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Calendar\Calendar');
  }
  /**
   * Updates metadata for a calendar. (calendars.update)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param Google_Calendar $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Calendar
   */
  public function update($calendarId, \Google\Service\Calendar\Calendar $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Calendar\Calendar');
  }
}
