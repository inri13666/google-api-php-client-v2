<?php 
namespace Google\Service\Directory\Resource;
class Notifications extends \Google\Resource\Service
{

  /**
   * Deletes a notification (notifications.delete)
   *
   * @param string $customer
   * The unique ID for the customer's Google account. The customerId is also returned as part of the
    * Users resource.
   * @param string $notificationId
   * The unique ID of the notification.
   * @param array $optParams Optional parameters.
   */
  public function delete($customer, $notificationId, $optParams = array())
  {
    $params = array('customer' => $customer, 'notificationId' => $notificationId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a notification. (notifications.get)
   *
   * @param string $customer
   * The unique ID for the customer's Google account. The customerId is also returned as part of the
    * Users resource.
   * @param string $notificationId
   * The unique ID of the notification.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Notification
   */
  public function get($customer, $notificationId, $optParams = array())
  {
    $params = array('customer' => $customer, 'notificationId' => $notificationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Directory\Notification');
  }
  /**
   * Retrieves a list of notifications. (notifications.listNotifications)
   *
   * @param string $customer
   * The unique ID for the customer's Google account.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The token to specify the page of results to retrieve.
   * @opt_param string maxResults
   * Maximum number of notifications to return per page. The default is 100.
   * @opt_param string language
   * The ISO 639-1 code of the language notifications are returned in. The default is English (en).
   * @return \Google\Service\Directory\Notifications
   */
  public function listNotifications($customer, $optParams = array())
  {
    $params = array('customer' => $customer);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\Notifications');
  }
  /**
   * Updates a notification. This method supports patch semantics.
   * (notifications.patch)
   *
   * @param string $customer
   * The unique ID for the customer's Google account.
   * @param string $notificationId
   * The unique ID of the notification.
   * @param Google_Notification $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Notification
   */
  public function patch($customer, $notificationId, \Google\Service\Directory\Notification $postBody, $optParams = array())
  {
    $params = array('customer' => $customer, 'notificationId' => $notificationId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Directory\Notification');
  }
  /**
   * Updates a notification. (notifications.update)
   *
   * @param string $customer
   * The unique ID for the customer's Google account.
   * @param string $notificationId
   * The unique ID of the notification.
   * @param Google_Notification $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Notification
   */
  public function update($customer, $notificationId, \Google\Service\Directory\Notification $postBody, $optParams = array())
  {
    $params = array('customer' => $customer, 'notificationId' => $notificationId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Directory\Notification');
  }
}
