<?php 
namespace Google\Service\Licensing\Resource;
class LicenseAssignments extends \Google\Resource\Service
{

  /**
   * Revoke License. (licenseAssignments.delete)
   *
   * @param string $productId
   * Name for product
   * @param string $skuId
   * Name for sku
   * @param string $userId
   * email id or unique Id of the user
   * @param array $optParams Optional parameters.
   */
  public function delete($productId, $skuId, $userId, $optParams = array())
  {
    $params = array('productId' => $productId, 'skuId' => $skuId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Get license assignment of a particular product and sku for a user
   * (licenseAssignments.get)
   *
   * @param string $productId
   * Name for product
   * @param string $skuId
   * Name for sku
   * @param string $userId
   * email id or unique Id of the user
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Licensing\LicenseAssignment
   */
  public function get($productId, $skuId, $userId, $optParams = array())
  {
    $params = array('productId' => $productId, 'skuId' => $skuId, 'userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Licensing\LicenseAssignment');
  }
  /**
   * Assign License. (licenseAssignments.insert)
   *
   * @param string $productId
   * Name for product
   * @param string $skuId
   * Name for sku
   * @param Google_LicenseAssignmentInsert $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Licensing\LicenseAssignment
   */
  public function insert($productId, $skuId, \Google\Service\Licensing\LicenseAssignmentInsert $postBody, $optParams = array())
  {
    $params = array('productId' => $productId, 'skuId' => $skuId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Licensing\LicenseAssignment');
  }
  /**
   * List license assignments for given product of the customer.
   * (licenseAssignments.listForProduct)
   *
   * @param string $productId
   * Name for product
   * @param string $customerId
   * CustomerId represents the customer for whom licenseassignments are queried
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token to fetch the next page.Optional. By default server will return first page
   * @opt_param string maxResults
   * Maximum number of campaigns to return at one time. Must be positive. Optional. Default value is
    * 100.
   * @return \Google\Service\Licensing\LicenseAssignmentList
   */
  public function listForProduct($productId, $customerId, $optParams = array())
  {
    $params = array('productId' => $productId, 'customerId' => $customerId);
    $params = array_merge($params, $optParams);
    return $this->call('listForProduct', array($params), 'Google\Service\Licensing\LicenseAssignmentList');
  }
  /**
   * List license assignments for given product and sku of the customer.
   * (licenseAssignments.listForProductAndSku)
   *
   * @param string $productId
   * Name for product
   * @param string $skuId
   * Name for sku
   * @param string $customerId
   * CustomerId represents the customer for whom licenseassignments are queried
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Token to fetch the next page.Optional. By default server will return first page
   * @opt_param string maxResults
   * Maximum number of campaigns to return at one time. Must be positive. Optional. Default value is
    * 100.
   * @return \Google\Service\Licensing\LicenseAssignmentList
   */
  public function listForProductAndSku($productId, $skuId, $customerId, $optParams = array())
  {
    $params = array('productId' => $productId, 'skuId' => $skuId, 'customerId' => $customerId);
    $params = array_merge($params, $optParams);
    return $this->call('listForProductAndSku', array($params), 'Google\Service\Licensing\LicenseAssignmentList');
  }
  /**
   * Assign License. This method supports patch semantics.
   * (licenseAssignments.patch)
   *
   * @param string $productId
   * Name for product
   * @param string $skuId
   * Name for sku for which license would be revoked
   * @param string $userId
   * email id or unique Id of the user
   * @param Google_LicenseAssignment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Licensing\LicenseAssignment
   */
  public function patch($productId, $skuId, $userId, \Google\Service\Licensing\LicenseAssignment $postBody, $optParams = array())
  {
    $params = array('productId' => $productId, 'skuId' => $skuId, 'userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Licensing\LicenseAssignment');
  }
  /**
   * Assign License. (licenseAssignments.update)
   *
   * @param string $productId
   * Name for product
   * @param string $skuId
   * Name for sku for which license would be revoked
   * @param string $userId
   * email id or unique Id of the user
   * @param Google_LicenseAssignment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Licensing\LicenseAssignment
   */
  public function update($productId, $skuId, $userId, \Google\Service\Licensing\LicenseAssignment $postBody, $optParams = array())
  {
    $params = array('productId' => $productId, 'skuId' => $skuId, 'userId' => $userId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Licensing\LicenseAssignment');
  }
}
