<?php 
namespace Google\Service\YouTube\Resource;
class PlaylistItems extends \Google\Resource\Service
{

  /**
   * Deletes a playlist item. (playlistItems.delete)
   *
   * @param string $id
   * The id parameter specifies the YouTube playlist item ID for the playlist item that is being
    * deleted. In a playlistItem resource, the id property specifies the playlist item's ID.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Adds a resource to a playlist. (playlistItems.insert)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * names that you can include in the parameter value are snippet, contentDetails, and status.
   * @param Google_PlaylistItem $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner
   * Note: This parameter is intended exclusively for YouTube content partners.
  The
    * onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify
    * a YouTube CMS user who is acting on behalf of the content owner specified in the parameter
    * value. This parameter is intended for YouTube content partners that own and manage many
    * different YouTube channels. It allows content owners to authenticate once and get access to all
    * their video and channel data, without having to provide authentication credentials for each
    * individual channel. The CMS account that the user authenticates with must be linked to the
    * specified YouTube content owner.
   * @return \Google\Service\YouTube\PlaylistItem
   */
  public function insert($part, \Google\Service\YouTube\PlaylistItem $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\YouTube\PlaylistItem');
  }
  /**
   * Returns a collection of playlist items that match the API request parameters.
   * You can retrieve all of the playlist items in a specified playlist or
   * retrieve one or more playlist items by their unique IDs.
   * (playlistItems.listPlaylistItems)
   *
   * @param string $part
   * The part parameter specifies a comma-separated list of one or more playlistItem resource
    * properties that the API response will include. The part names that you can include in the
    * parameter value are id, snippet, contentDetails, and status.
  If the parameter identifies a
    * property that contains child properties, the child properties will be included in the response.
    * For example, in a playlistItem resource, the snippet property contains numerous fields,
    * including the title, description, position, and resourceId properties. As such, if you set
    * part=snippet, the API response will contain all of those properties.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner
   * Note: This parameter is intended exclusively for YouTube content partners.
  The
    * onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify
    * a YouTube CMS user who is acting on behalf of the content owner specified in the parameter
    * value. This parameter is intended for YouTube content partners that own and manage many
    * different YouTube channels. It allows content owners to authenticate once and get access to all
    * their video and channel data, without having to provide authentication credentials for each
    * individual channel. The CMS account that the user authenticates with must be linked to the
    * specified YouTube content owner.
   * @opt_param string playlistId
   * The playlistId parameter specifies the unique ID of the playlist for which you want to retrieve
    * playlist items. Note that even though this is an optional parameter, every request to retrieve
    * playlist items must specify a value for either the id parameter or the playlistId parameter.
   * @opt_param string videoId
   * The videoId parameter specifies that the request should return only the playlist items that
    * contain the specified video.
   * @opt_param string maxResults
   * The maxResults parameter specifies the maximum number of items that should be returned in the
    * result set.
   * @opt_param string pageToken
   * The pageToken parameter identifies a specific page in the result set that should be returned. In
    * an API response, the nextPageToken and prevPageToken properties identify other pages that could
    * be retrieved.
   * @opt_param string id
   * The id parameter specifies a comma-separated list of one or more unique playlist item IDs.
   * @return \Google\Service\YouTube\PlaylistItemListResponse
   */
  public function listPlaylistItems($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTube\PlaylistItemListResponse');
  }
  /**
   * Modifies a playlist item. For example, you could update the item's position
   * in the playlist. (playlistItems.update)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * names that you can include in the parameter value are snippet, contentDetails, and status.
  Note
    * that this method will override the existing values for all of the mutable properties that are
    * contained in any parts that the parameter value specifies. For example, a playlist item can
    * specify a start time and end time, which identify the times portion of the video that should
    * play when users watch the video in the playlist. If your request is updating a playlist item
    * that sets these values, and the request's part parameter value includes the contentDetails part,
    * the playlist item's start and end times will be updated to whatever value the request body
    * specifies. If the request body does not specify values, the existing start and end times will be
    * removed and replaced with the default settings.
   * @param Google_PlaylistItem $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\YouTube\PlaylistItem
   */
  public function update($part, \Google\Service\YouTube\PlaylistItem $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\YouTube\PlaylistItem');
  }
}
