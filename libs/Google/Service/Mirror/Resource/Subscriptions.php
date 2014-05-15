<?php 
namespace Google\Service\Mirror\Resource;
class Subscriptions extends \Google\Resource\Service
{

  /**
   * Deletes a subscription. (subscriptions.delete)
   *
   * @param string $id
   * The ID of the subscription.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Creates a new subscription. (subscriptions.insert)
   *
   * @param Google_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Subscription
   */
  public function insert(\Google\Service\Mirror\Subscription $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Mirror\Subscription');
  }
  /**
   * Retrieves a list of subscriptions for the authenticated user and service.
   * (subscriptions.listSubscriptions)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\SubscriptionsListResponse
   */
  public function listSubscriptions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Mirror\SubscriptionsListResponse');
  }
  /**
   * Updates an existing subscription in place. (subscriptions.update)
   *
   * @param string $id
   * The ID of the subscription.
   * @param Google_Subscription $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Subscription
   */
  public function update($id, \Google\Service\Mirror\Subscription $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Mirror\Subscription');
  }
}
