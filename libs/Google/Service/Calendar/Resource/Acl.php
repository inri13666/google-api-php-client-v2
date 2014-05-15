<?php 
namespace Google\Service\Calendar\Resource;
class Acl extends \Google\Resource\Service
{

  /**
   * Deletes an access control rule. (acl.delete)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param array $optParams Optional parameters.
   */
  public function delete($calendarId, $ruleId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns an access control rule. (acl.get)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function get($calendarId, $ruleId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Calendar\AclRule');
  }
  /**
   * Creates an access control rule. (acl.insert)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param Google_AclRule $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function insert($calendarId, \Google\Service\Calendar\AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Calendar\AclRule');
  }
  /**
   * Returns the rules in the access control list for the calendar. (acl.listAcl)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param string syncToken
   * Token obtained from the 'nextSyncToken' field returned as part of the result of a previous call
    * to this method. It makes the result of this call contain only entries that have changed since
    * the last call, including entries that have been removed in the meantime (they will have the
    * 'role' set to 'none'). Optional. The default is to return to all entries.
   * @opt_param int maxResults
   * Maximum number of entries returned on one result page. Optional.
   * @opt_param bool showDeleted
   * Whether to include deleted acls in the result. Deleted acls are represented by with 'role' equal
    * to 'none'. Deleted acls will always be included if 'syncToken' is provided. Optional. The
    * default is False.
   * @return \Google\Service\Calendar\Acl
   */
  public function listAcl($calendarId, $optParams = array())
  {
    $params = array('calendarId' => $calendarId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Calendar\Acl');
  }
  /**
   * Updates an access control rule. This method supports patch semantics.
   * (acl.patch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param Google_AclRule $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function patch($calendarId, $ruleId, \Google\Service\Calendar\AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Calendar\AclRule');
  }
  /**
   * Updates an access control rule. (acl.update)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param string $ruleId
   * ACL rule identifier.
   * @param Google_AclRule $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\AclRule
   */
  public function update($calendarId, $ruleId, \Google\Service\Calendar\AclRule $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Calendar\AclRule');
  }
  /**
   * Watch for changes to ACL resources. (acl.watch)
   *
   * @param string $calendarId
   * Calendar identifier.
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token specifying which result page to return. Optional.
   * @opt_param string syncToken
   * Token obtained from the 'nextSyncToken' field returned as part of the result of a previous call
    * to this method. It makes the result of this call contain only entries that have changed since
    * the last call, including entries that have been removed in the meantime (they will have the
    * 'role' set to 'none'). Optional. The default is to return to all entries.
   * @opt_param int maxResults
   * Maximum number of entries returned on one result page. Optional.
   * @opt_param bool showDeleted
   * Whether to include deleted acls in the result. Deleted acls are represented by with 'role' equal
    * to 'none'. Deleted acls will always be included if 'syncToken' is provided. Optional. The
    * default is False.
   * @return \Google\Service\Calendar\Channel
   */
  public function watch($calendarId, \Google\Service\Calendar\Channel $postBody, $optParams = array())
  {
    $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), 'Google\Service\Calendar\Channel');
  }
}
