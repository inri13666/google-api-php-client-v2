<?php 
namespace Google\Service\Drive\Resource;
class Replies extends \Google\Resource\Service
{

  /**
   * Deletes a reply. (replies.delete)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param string $replyId
   * The ID of the reply.
   * @param array $optParams Optional parameters.
   */
  public function delete($fileId, $commentId, $replyId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a reply. (replies.get)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param string $replyId
   * The ID of the reply.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeDeleted
   * If set, this will succeed when retrieving a deleted reply.
   * @return \Google\Service\Drive\CommentReply
   */
  public function get($fileId, $commentId, $replyId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\CommentReply');
  }
  /**
   * Creates a new reply to the given comment. (replies.insert)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param Google_CommentReply $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\CommentReply
   */
  public function insert($fileId, $commentId, \Google\Service\Drive\CommentReply $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Drive\CommentReply');
  }
  /**
   * Lists all of the replies to a comment. (replies.listReplies)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, used to page through large result sets. To get the next page of results,
    * set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param bool includeDeleted
   * If set, all replies, including deleted replies (with content stripped) will be returned.
   * @opt_param int maxResults
   * The maximum number of replies to include in the response, used for paging.
   * @return \Google\Service\Drive\CommentReplyList
   */
  public function listReplies($fileId, $commentId, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Drive\CommentReplyList');
  }
  /**
   * Updates an existing reply. This method supports patch semantics.
   * (replies.patch)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param string $replyId
   * The ID of the reply.
   * @param Google_CommentReply $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\CommentReply
   */
  public function patch($fileId, $commentId, $replyId, \Google\Service\Drive\CommentReply $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Drive\CommentReply');
  }
  /**
   * Updates an existing reply. (replies.update)
   *
   * @param string $fileId
   * The ID of the file.
   * @param string $commentId
   * The ID of the comment.
   * @param string $replyId
   * The ID of the reply.
   * @param Google_CommentReply $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Drive\CommentReply
   */
  public function update($fileId, $commentId, $replyId, \Google\Service\Drive\CommentReply $postBody, $optParams = array())
  {
    $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Drive\CommentReply');
  }
}
