<?php 
namespace Google\Service\Reseller\Resource;
class Customers extends \Google\Resource\Service
{

  /**
   * Gets a customer resource if one exists and is owned by the reseller.
   * (customers.get)
   *
   * @param string $customerId
   * Id of the Customer
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Customer
   */
  public function get($customerId, $optParams = array())
  {
    $params = array('customerId' => $customerId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Reseller\Customer');
  }
  /**
   * Creates a customer resource if one does not already exist. (customers.insert)
   *
   * @param Google_Customer $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customerAuthToken
   * An auth token needed for inserting a customer for which domain already exists. Can be generated
    * at https://www.google.com/a/cpanel//TransferToken. Optional.
   * @return \Google\Service\Reseller\Customer
   */
  public function insert(\Google\Service\Reseller\Customer $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Reseller\Customer');
  }
  /**
   * Update a customer resource if one it exists and is owned by the reseller.
   * This method supports patch semantics. (customers.patch)
   *
   * @param string $customerId
   * Id of the Customer
   * @param Google_Customer $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Customer
   */
  public function patch($customerId, \Google\Service\Reseller\Customer $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Reseller\Customer');
  }
  /**
   * Update a customer resource if one it exists and is owned by the reseller.
   * (customers.update)
   *
   * @param string $customerId
   * Id of the Customer
   * @param Google_Customer $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Customer
   */
  public function update($customerId, \Google\Service\Reseller\Customer $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Reseller\Customer');
  }
}
