<?php 
namespace Google\Service\YouTube\Resource;
class Playlists extends \Google\Resource\Service
{

  /**
   * Deletes a playlist. (playlists.delete)
   *
   * @param string $id
   * The id parameter specifies the YouTube playlist ID for the playlist that is being deleted. In a
    * playlist resource, the id property specifies the playlist's ID.
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
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Creates a playlist. (playlists.insert)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * names that you can include in the parameter value are snippet and status.
   * @param Google_Playlist $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwnerChannel
   * This parameter can only be used in a properly authorized request. Note: This parameter is
    * intended exclusively for YouTube content partners.
  The onBehalfOfContentOwnerChannel parameter
    * specifies the YouTube channel ID of the channel to which a video is being added. This parameter
    * is required when a request specifies a value for the onBehalfOfContentOwner parameter, and it
    * can only be used in conjunction with that parameter. In addition, the request must be authorized
    * using a CMS account that is linked to the content owner that the onBehalfOfContentOwner
    * parameter specifies. Finally, the channel that the onBehalfOfContentOwnerChannel parameter value
    * specifies must be linked to the content owner that the onBehalfOfContentOwner parameter
    * specifies.
  This parameter is intended for YouTube content partners that own and manage many
    * different YouTube channels. It allows content owners to authenticate once and perform actions on
    * behalf of the channel specified in the parameter value, without having to provide authentication
    * credentials for each separate channel.
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
   * @return \Google\Service\YouTube\Playlist
   */
  public function insert($part, \Google\Service\YouTube\Playlist $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\YouTube\Playlist');
  }
  /**
   * Returns a collection of playlists that match the API request parameters. For
   * example, you can retrieve all playlists that the authenticated user owns, or
   * you can retrieve one or more playlists by their unique IDs.
   * (playlists.listPlaylists)
   *
   * @param string $part
   * The part parameter specifies a comma-separated list of one or more playlist resource properties
    * that the API response will include. The part names that you can include in the parameter value
    * are id, snippet, status, and contentDetails.
  If the parameter identifies a property that
    * contains child properties, the child properties will be included in the response. For example,
    * in a playlist resource, the snippet property contains properties like author, title,
    * description, tags, and timeCreated. As such, if you set part=snippet, the API response will
    * contain all of those properties.
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
   * @opt_param string onBehalfOfContentOwnerChannel
   * This parameter can only be used in a properly authorized request. Note: This parameter is
    * intended exclusively for YouTube content partners.
  The onBehalfOfContentOwnerChannel parameter
    * specifies the YouTube channel ID of the channel to which a video is being added. This parameter
    * is required when a request specifies a value for the onBehalfOfContentOwner parameter, and it
    * can only be used in conjunction with that parameter. In addition, the request must be authorized
    * using a CMS account that is linked to the content owner that the onBehalfOfContentOwner
    * parameter specifies. Finally, the channel that the onBehalfOfContentOwnerChannel parameter value
    * specifies must be linked to the content owner that the onBehalfOfContentOwner parameter
    * specifies.
  This parameter is intended for YouTube content partners that own and manage many
    * different YouTube channels. It allows content owners to authenticate once and perform actions on
    * behalf of the channel specified in the parameter value, without having to provide authentication
    * credentials for each separate channel.
   * @opt_param string channelId
   * This value indicates that the API should only return the specified channel's playlists.
   * @opt_param bool mine
   * Set this parameter's value to true to instruct the API to only return playlists owned by the
    * authenticated user.
   * @opt_param string maxResults
   * The maxResults parameter specifies the maximum number of items that should be returned in the
    * result set.
   * @opt_param string pageToken
   * The pageToken parameter identifies a specific page in the result set that should be returned. In
    * an API response, the nextPageToken and prevPageToken properties identify other pages that could
    * be retrieved.
   * @opt_param string id
   * The id parameter specifies a comma-separated list of the YouTube playlist ID(s) for the
    * resource(s) that are being retrieved. In a playlist resource, the id property specifies the
    * playlist's YouTube playlist ID.
   * @return \Google\Service\YouTube\PlaylistListResponse
   */
  public function listPlaylists($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTube\PlaylistListResponse');
  }
  /**
   * Modifies a playlist. For example, you could change a playlist's title,
   * description, or privacy status. (playlists.update)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * names that you can include in the parameter value are snippet and status.
  Note that this method
    * will override the existing values for all of the mutable properties that are contained in any
    * parts that the parameter value specifies. For example, a playlist's privacy setting is contained
    * in the status part. As such, if your request is updating a private playlist, and the request's
    * part parameter value includes the status part, the playlist's privacy setting will be updated to
    * whatever value the request body specifies. If the request body does not specify a value, the
    * existing privacy setting will be removed and the playlist will revert to the default privacy
    * setting.
   * @param Google_Playlist $postBody
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
   * @return \Google\Service\YouTube\Playlist
   */
  public function update($part, \Google\Service\YouTube\Playlist $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\YouTube\Playlist');
  }
}
