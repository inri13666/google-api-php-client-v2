<?php 
namespace Google\Service\Orkut\Resource;
class CommunityPollComments extends \Google\Resource\Service
{

  /**
   * Adds a comment on a community poll. (communityPollComments.insert)
   *
   * @param int $communityId
   * The ID of the community whose poll is being commented.
   * @param string $pollId
   * The ID of the poll being commented.
   * @param Google_CommunityPollComment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\CommunityPollComment
   */
  public function insert($communityId, $pollId, \Google\Service\Orkut\CommunityPollComment $postBody, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Orkut\CommunityPollComment');
  }
  /**
   * Retrieves the comments of a community poll.
   * (communityPollComments.listCommunityPollComments)
   *
   * @param int $communityId
   * The ID of the community whose poll is having its comments listed.
   * @param string $pollId
   * The ID of the community whose polls will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of comments to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityPollCommentList
   */
  public function listCommunityPollComments($communityId, $pollId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Orkut\CommunityPollCommentList');
  }
}
