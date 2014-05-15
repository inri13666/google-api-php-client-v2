<?php 
namespace Google\Service\Mirror\Resource;
class Timeline extends \Google\Resource\Service
{

  /**
   * Deletes a timeline item. (timeline.delete)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a single timeline item by ID. (timeline.get)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\TimelineItem
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Mirror\TimelineItem');
  }
  /**
   * Inserts a new item into the timeline. (timeline.insert)
   *
   * @param Google_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\TimelineItem
   */
  public function insert(\Google\Service\Mirror\TimelineItem $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Mirror\TimelineItem');
  }
  /**
   * Retrieves a list of timeline items for the authenticated user.
   * (timeline.listTimeline)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * Controls the order in which timeline items are returned.
   * @opt_param bool includeDeleted
   * If true, tombstone records for deleted items will be returned.
   * @opt_param string maxResults
   * The maximum number of items to include in the response, used for paging.
   * @opt_param string pageToken
   * Token for the page of results to return.
   * @opt_param string sourceItemId
   * If provided, only items with the given sourceItemId will be returned.
   * @opt_param bool pinnedOnly
   * If true, only pinned items will be returned.
   * @opt_param string bundleId
   * If provided, only items with the given bundleId will be returned.
   * @return \Google\Service\Mirror\TimelineListResponse
   */
  public function listTimeline($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Mirror\TimelineListResponse');
  }
  /**
   * Updates a timeline item in place. This method supports patch semantics.
   * (timeline.patch)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param Google_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\TimelineItem
   */
  public function patch($id, \Google\Service\Mirror\TimelineItem $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Mirror\TimelineItem');
  }
  /**
   * Updates a timeline item in place. (timeline.update)
   *
   * @param string $id
   * The ID of the timeline item.
   * @param Google_TimelineItem $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\TimelineItem
   */
  public function update($id, \Google\Service\Mirror\TimelineItem $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Mirror\TimelineItem');
  }
}
