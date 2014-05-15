<?php 
namespace Google\Service\Calendar\Resource;
class CalendarList extends \Google\Resource\Service
{

  /**
   * Deletes an entry on the user's calendar list. (calendarList.delete)
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
   * Returns an entry on the user's calendar list. (calendarList.get)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\CalendarListEntry
   */
  public function get($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Calendar\CalendarListEntry');
  }
  /**
   * Adds an entry to the user's calendar list. (calendarList.insert)
   *
   * @param Google_CalendarListEntry $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool colorRgbFormat
   * Whether to use the foregroundColor and backgroundColor fields to write the calendar colors
    * (RGB). If this feature is used, the index-based colorId field will be set to the best matching
    * option automatically. Optional. The default is False.
   * @return \Google\Service\Calendar\CalendarListEntry
   */
  public function insert(\Google\Service\Calendar\CalendarListEntry $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Calendar\CalendarListEntry');
  }
  /**
   * Returns entries on the user's calendar list. (calendarList.listCalendarList)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string syncToken
   * Token obtained from the 'nextSyncToken' field returned on the last result page of the previous
    * method's call. It makes the result of this call contain only entries that have changed since the
    * last call. Optional. The default is to return all entries.
   * @opt_param bool showDeleted
   * Whether to include deleted calendar list entries in the result. Optional. The default is False.
   * @opt_param string minAccessRole
   * The minimum access role for the user in the returned entires. Optional. The default is no
    * restriction.
   * @opt_param int maxResults
   * Maximum number of entries returned on one result page. Optional.
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param bool showHidden
   * Whether to show hidden entries. Optional. The default is False.
   * @return \Google\Service\Calendar\CalendarList
   */
  public function listCalendarList($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Calendar\CalendarList');
  }
  /**
   * Updates an entry on the user's calendar list. This method supports patch
   * semantics. (calendarList.patch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param Google_CalendarListEntry $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool colorRgbFormat
   * Whether to use the 'foregroundColor' and 'backgroundColor' fields to write the calendar colors
    * (RGB). If this feature is used, the index-based 'colorId' field will be set to the best matching
    * option automatically. Optional. The default is False.
   * @return \Google\Service\Calendar\CalendarListEntry
   */
  public function patch($calendarId, \Google\Service\Calendar\CalendarListEntry $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Calendar\CalendarListEntry');
  }
  /**
   * Updates an entry on the user's calendar list. (calendarList.update)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param Google_CalendarListEntry $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool colorRgbFormat
   * Whether to use the 'foregroundColor' and 'backgroundColor' fields to write the calendar colors
    * (RGB). If this feature is used, the index-based 'colorId' field will be set to the best matching
    * option automatically. Optional. The default is False.
   * @return \Google\Service\Calendar\CalendarListEntry
   */
  public function update($calendarId, \Google\Service\Calendar\CalendarListEntry $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Calendar\CalendarListEntry');
  }
  /**
   * Watch for changes to CalendarList resources. (calendarList.watch)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string syncToken
   * Token obtained from the 'nextSyncToken' field returned on the last result page of the previous
    * method's call. It makes the result of this call contain only entries that have changed since the
    * last call. Optional. The default is to return all entries.
   * @opt_param bool showDeleted
   * Whether to include deleted calendar list entries in the result. Optional. The default is False.
   * @opt_param string minAccessRole
   * The minimum access role for the user in the returned entires. Optional. The default is no
    * restriction.
   * @opt_param int maxResults
   * Maximum number of entries returned on one result page. Optional.
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param bool showHidden
   * Whether to show hidden entries. Optional. The default is False.
   * @return \Google\Service\Calendar\Channel
   */
  public function watch(\Google\Service\Calendar\Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), 'Google\Service\Calendar\Channel');
  }
}
