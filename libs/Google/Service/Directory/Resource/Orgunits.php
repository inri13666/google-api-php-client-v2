<?php 
namespace Google\Service\Directory\Resource;
class Orgunits extends \Google\Resource\Service
{

  /**
   * Remove Organization Unit (orgunits.delete)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param array $optParams Optional parameters.
   */
  public function delete($customerId, $orgUnitPath, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieve Organization Unit (orgunits.get)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function get($customerId, $orgUnitPath, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Directory\OrgUnit');
  }
  /**
   * Add Organization Unit (orgunits.insert)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param Google_OrgUnit $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function insert($customerId, \Google\Service\Directory\OrgUnit $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Directory\OrgUnit');
  }
  /**
   * Retrieve all Organization Units (orgunits.listOrgunits)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param array $optParams Optional parameters.
   *
   * @opt_param string type
   * Whether to return all sub-organizations or just immediate children
   * @opt_param string orgUnitPath
   * the URL-encoded organization unit
   * @return \Google\Service\Directory\OrgUnits
   */
  public function listOrgunits($customerId, $optParams = array())
  {
    $params = array('customerId' => $customerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\OrgUnits');
  }
  /**
   * Update Organization Unit. This method supports patch semantics.
   * (orgunits.patch)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param Google_OrgUnit $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function patch($customerId, $orgUnitPath, \Google\Service\Directory\OrgUnit $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Directory\OrgUnit');
  }
  /**
   * Update Organization Unit (orgunits.update)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $orgUnitPath
   * Full path of the organization unit
   * @param Google_OrgUnit $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\OrgUnit
   */
  public function update($customerId, $orgUnitPath, \Google\Service\Directory\OrgUnit $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Directory\OrgUnit');
  }
}
