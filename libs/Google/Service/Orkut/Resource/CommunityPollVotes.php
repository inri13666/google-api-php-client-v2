<?php 
namespace Google\Service\Orkut\Resource;
class CommunityPollVotes extends \Google\Resource\Service
{

  /**
   * Votes on a community poll. (communityPollVotes.insert)
   *
   * @param int $communityId
   * The ID of the community whose poll is being voted.
   * @param string $pollId
   * The ID of the poll being voted.
   * @param Google_CommunityPollVote $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\CommunityPollVote
   */
  public function insert($communityId, $pollId, \Google\Service\Orkut\CommunityPollVote $postBody, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Orkut\CommunityPollVote');
  }
}
