<?php 
namespace Google\Service\YouTube\Resource;
class Videos extends \Google\Resource\Service
{

  /**
   * Deletes a YouTube video. (videos.delete)
   *
   * @param string $id
   * The id parameter specifies the YouTube video ID for the resource that is being deleted. In a
    * video resource, the id property specifies the video's ID.
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
    * individual channel. The actual CMS account that the user authenticates with must be linked to
    * the specified YouTube content owner.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves the ratings that the authorized user gave to a list of specified
   * videos. (videos.getRating)
   *
   * @param string $id
   * The id parameter specifies a comma-separated list of the YouTube video ID(s) for the resource(s)
    * for which you are retrieving rating data. In a video resource, the id property specifies the
    * video's ID.
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
   * @return \Google\Service\YouTube\VideoGetRatingResponse
   */
  public function getRating($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('getRating', array($params), 'Google\Service\YouTube\VideoGetRatingResponse');
  }
  /**
   * Uploads a video to YouTube and optionally sets the video's metadata.
   * (videos.insert)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * names that you can include in the parameter value are snippet, contentDetails, fileDetails,
    * liveStreamingDetails, player, processingDetails, recordingDetails, statistics, status,
    * suggestions, and topicDetails. However, not all of those parts contain properties that can be
    * set when setting or updating a video's metadata. For example, the statistics object encapsulates
    * statistics that YouTube calculates for a video and does not contain values that you can set or
    * modify. If the parameter value specifies a part that does not contain mutable values, that part
    * will still be included in the API response.
   * @param Google_Video $postBody
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
   * @opt_param bool stabilize
   * The stabilize parameter indicates whether YouTube should adjust the video to remove shaky camera
    * motions.
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
   * @opt_param bool notifySubscribers
   * The notifySubscribers parameter indicates whether YouTube should send notification to
    * subscribers about the inserted video.
   * @opt_param bool autoLevels
   * The autoLevels parameter indicates whether YouTube should automatically enhance the video's
    * lighting and color.
   * @return \Google\Service\YouTube\Video
   */
  public function insert($part, \Google\Service\YouTube\Video $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\YouTube\Video');
  }
  /**
   * Returns a list of videos that match the API request parameters.
   * (videos.listVideos)
   *
   * @param string $part
   * The part parameter specifies a comma-separated list of one or more video resource properties
    * that the API response will include. The part names that you can include in the parameter value
    * are id, snippet, contentDetails, fileDetails, liveStreamingDetails, player, processingDetails,
    * recordingDetails, statistics, status, suggestions, and topicDetails.
  If the parameter
    * identifies a property that contains child properties, the child properties will be included in
    * the response. For example, in a video resource, the snippet property contains the channelId,
    * title, description, tags, and categoryId properties. As such, if you set part=snippet, the API
    * response will contain all of those properties.
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
   * @opt_param string regionCode
   * The regionCode parameter instructs the API to select a video chart available in the specified
    * region. This parameter can only be used in conjunction with the chart parameter. The parameter
    * value is an ISO 3166-1 alpha-2 country code.
   * @opt_param string locale
   * DEPRECATED
   * @opt_param string videoCategoryId
   * The videoCategoryId parameter identifies the video category for which the chart should be
    * retrieved. This parameter can only be used in conjunction with the chart parameter. By default,
    * charts are not restricted to a particular category.
   * @opt_param string chart
   * The chart parameter identifies the chart that you want to retrieve.
   * @opt_param string maxResults
   * The maxResults parameter specifies the maximum number of items that should be returned in the
    * result set.
  Note: This parameter is supported for use in conjunction with the myRating
    * parameter, but it is not supported for use in conjunction with the id parameter.
   * @opt_param string pageToken
   * The pageToken parameter identifies a specific page in the result set that should be returned. In
    * an API response, the nextPageToken and prevPageToken properties identify other pages that could
    * be retrieved.
  Note: This parameter is supported for use in conjunction with the myRating
    * parameter, but it is not supported for use in conjunction with the id parameter.
   * @opt_param string myRating
   * Set this parameter's value to like or dislike to instruct the API to only return videos liked or
    * disliked by the authenticated user.
   * @opt_param string id
   * The id parameter specifies a comma-separated list of the YouTube video ID(s) for the resource(s)
    * that are being retrieved. In a video resource, the id property specifies the video's ID.
   * @return \Google\Service\YouTube\VideoListResponse
   */
  public function listVideos($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTube\VideoListResponse');
  }
  /**
   * Add a like or dislike rating to a video or remove a rating from a video.
   * (videos.rate)
   *
   * @param string $id
   * The id parameter specifies the YouTube video ID of the video that is being rated or having its
    * rating removed.
   * @param string $rating
   * Specifies the rating to record.
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
  public function rate($id, $rating, $optParams = array())
  {
    $params = array('id' => $id, 'rating' => $rating);
    $params = array_merge($params, $optParams);
    return $this->call('rate', array($params));
  }
  /**
   * Updates a video's metadata. (videos.update)
   *
   * @param string $part
   * The part parameter serves two purposes in this operation. It identifies the properties that the
    * write operation will set as well as the properties that the API response will include.
  The part
    * names that you can include in the parameter value are snippet, contentDetails, fileDetails,
    * liveStreamingDetails, player, processingDetails, recordingDetails, statistics, status,
    * suggestions, and topicDetails.
  Note that this method will override the existing values for all
    * of the mutable properties that are contained in any parts that the parameter value specifies.
    * For example, a video's privacy setting is contained in the status part. As such, if your request
    * is updating a private video, and the request's part parameter value includes the status part,
    * the video's privacy setting will be updated to whatever value the request body specifies. If the
    * request body does not specify a value, the existing privacy setting will be removed and the
    * video will revert to the default privacy setting.
  In addition, not all of those parts contain
    * properties that can be set when setting or updating a video's metadata. For example, the
    * statistics object encapsulates statistics that YouTube calculates for a video and does not
    * contain values that you can set or modify. If the parameter value specifies a part that does not
    * contain mutable values, that part will still be included in the API response.
   * @param Google_Video $postBody
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
    * individual channel. The actual CMS account that the user authenticates with must be linked to
    * the specified YouTube content owner.
   * @return \Google\Service\YouTube\Video
   */
  public function update($part, \Google\Service\YouTube\Video $postBody, $optParams = array())
  {
    $params = array('part' => $part, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\YouTube\Video');
  }
}
