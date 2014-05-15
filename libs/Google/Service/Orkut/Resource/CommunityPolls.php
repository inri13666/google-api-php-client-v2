<?php 
namespace Google\Service\Orkut\Resource;
class CommunityPolls extends \Google\Resource\Service
{

  /**
   * Retrieves one specific poll of a community. (communityPolls.get)
   *
   * @param int $communityId
   * The ID of the community for whose poll will be retrieved.
   * @param string $pollId
   * The ID of the poll to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityPoll
   */
  public function get($communityId, $pollId, $optParams = array())
  {
    $params = array('communityId' => $communityId, 'pollId' => $pollId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Orkut\CommunityPoll');
  }
  /**
   * Retrieves the polls of a community. (communityPolls.listCommunityPolls)
   *
   * @param int $communityId
   * The ID of the community which polls will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of polls to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommunityPollList
   */
  public function listCommunityPolls($communityId, $optParams = array())
  {
    $params = array('communityId' => $communityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Orkut\CommunityPollList');
  }
}
