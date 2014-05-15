<?php 
namespace Google\Service\Drive\Resource;
class Changes extends \Google\Resource\Service
{

  /**
   * Gets a specific change. (changes.get)
   *
   * @param string $changeId
   * The ID of the change.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\Change
   */
  public function get($changeId, $optParams = array())
  {
    $params = array('changeId' => $changeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\Change');
  }
  /**
   * Lists the changes for a user. (changes.listChanges)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeSubscribed
   * Whether to include public files the user has opened and shared files. When set to false, the
    * list only includes owned files plus any shared or public files the user has explicitly added to
    * a folder they own.
   * @opt_param string startChangeId
   * Change ID to start listing changes from.
   * @opt_param bool includeDeleted
   * Whether to include deleted items.
   * @opt_param int maxResults
   * Maximum number of changes to return.
   * @opt_param string pageToken
   * Page token for changes.
   * @return \Google\Service\Drive\ChangeList
   */
  public function listChanges($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Drive\ChangeList');
  }
  /**
   * Subscribe to changes for a user. (changes.watch)
   *
   * @param Google_Channel $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeSubscribed
   * Whether to include public files the user has opened and shared files. When set to false, the
    * list only includes owned files plus any shared or public files the user has explicitly added to
    * a folder they own.
   * @opt_param string startChangeId
   * Change ID to start listing changes from.
   * @opt_param bool includeDeleted
   * Whether to include deleted items.
   * @opt_param int maxResults
   * Maximum number of changes to return.
   * @opt_param string pageToken
   * Page token for changes.
   * @return \Google\Service\Drive\Channel
   */
  public function watch(\Google\Service\Drive\Channel $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('watch', array($params), 'Google\Service\Drive\Channel');
  }
}
