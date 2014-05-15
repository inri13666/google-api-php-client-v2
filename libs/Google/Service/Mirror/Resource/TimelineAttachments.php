<?php 
namespace Google\Service\Mirror\Resource;
class TimelineAttachments extends \Google\Resource\Service
{

  /**
   * Deletes an attachment from a timeline item. (attachments.delete)
   *
   * @param string $itemId
   * The ID of the timeline item the attachment belongs to.
   * @param string $attachmentId
   * The ID of the attachment.
   * @param array $optParams Optional parameters.
   */
  public function delete($itemId, $attachmentId, $optParams = array())
  {
    $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves an attachment on a timeline item by item ID and attachment ID.
   * (attachments.get)
   *
   * @param string $itemId
   * The ID of the timeline item the attachment belongs to.
   * @param string $attachmentId
   * The ID of the attachment.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Attachment
   */
  public function get($itemId, $attachmentId, $optParams = array())
  {
    $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Mirror\Attachment');
  }
  /**
   * Adds a new attachment to a timeline item. (attachments.insert)
   *
   * @param string $itemId
   * The ID of the timeline item the attachment belongs to.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Attachment
   */
  public function insert($itemId, $optParams = array())
  {
    $params = array('itemId' => $itemId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Mirror\Attachment');
  }
  /**
   * Returns a list of attachments for a timeline item.
   * (attachments.listTimelineAttachments)
   *
   * @param string $itemId
   * The ID of the timeline item whose attachments should be listed.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\AttachmentsListResponse
   */
  public function listTimelineAttachments($itemId, $optParams = array())
  {
    $params = array('itemId' => $itemId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Mirror\AttachmentsListResponse');
  }
}
