<?php 
namespace Google\Service\Games\Resource;
class Rooms extends \Google\Resource\Service
{

  /**
   * Create a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.create)
   *
   * @param Google_RoomCreateRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Room
   */
  public function create(\Google\Service\Games\RoomCreateRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), 'Google\Service\Games\Room');
  }
  /**
   * Decline an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.decline)
   *
   * @param string $roomId
   * The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Room
   */
  public function decline($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('decline', array($params), 'Google\Service\Games\Room');
  }
  /**
   * Dismiss an invitation to join a room. For internal use by the Games SDK only.
   * Calling this method directly is unsupported. (rooms.dismiss)
   *
   * @param string $roomId
   * The ID of the room.
   * @param array $optParams Optional parameters.
   */
  public function dismiss($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('dismiss', array($params));
  }
  /**
   * Get the data for a room. (rooms.get)
   *
   * @param string $roomId
   * The ID of the room.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Room
   */
  public function get($roomId, $optParams = array())
  {
    $params = array('roomId' => $roomId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Games\Room');
  }
  /**
   * Join a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.join)
   *
   * @param string $roomId
   * The ID of the room.
   * @param Google_RoomJoinRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Room
   */
  public function join($roomId, \Google\Service\Games\RoomJoinRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('join', array($params), 'Google\Service\Games\Room');
  }
  /**
   * Leave a room. For internal use by the Games SDK only. Calling this method
   * directly is unsupported. (rooms.leave)
   *
   * @param string $roomId
   * The ID of the room.
   * @param Google_RoomLeaveRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Room
   */
  public function leave($roomId, \Google\Service\Games\RoomLeaveRequest $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('leave', array($params), 'Google\Service\Games\Room');
  }
  /**
   * Returns invitations to join rooms. (rooms.listRooms)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token returned by the previous request.
   * @opt_param int maxResults
   * The maximum number of rooms to return in the response, used for paging. For any response, the
    * actual number of rooms to return may be less than the specified maxResults.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\RoomList
   */
  public function listRooms($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Games\RoomList');
  }
  /**
   * Updates sent by a client reporting the status of peers in a room. For
   * internal use by the Games SDK only. Calling this method directly is
   * unsupported. (rooms.reportStatus)
   *
   * @param string $roomId
   * The ID of the room.
   * @param Google_RoomP2PStatuses $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\RoomStatus
   */
  public function reportStatus($roomId, \Google\Service\Games\RoomP2PStatuses $postBody, $optParams = array())
  {
    $params = array('roomId' => $roomId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportStatus', array($params), 'Google\Service\Games\RoomStatus');
  }
}
