<?php 
namespace Google\Service\PlusDomains\Resource;
class Audiences extends \Google\Resource\Service
{

  /**
   * List all of the audiences to which a user can share.
   * (audiences.listAudiences)
   *
   * @param string $userId
   * The ID of the user to get audiences for. The special value "me" can be used to indicate the
    * authenticated user.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of circles to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @return \Google\Service\PlusDomains\AudiencesFeed
   */
  public function listAudiences($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\PlusDomains\AudiencesFeed');
  }
}
