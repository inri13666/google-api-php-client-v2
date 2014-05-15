<?php 
namespace Google\Service\SiteVerification\Resource;
class WebResource extends \Google\Resource\Service
{

  /**
   * Relinquish ownership of a website or domain. (webResource.delete)
   *
   * @param string $id
   * The id of a verified site or domain.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Get the most current data for a website or domain. (webResource.get)
   *
   * @param string $id
   * The id of a verified site or domain.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SiteVerification\SiteVerificationWebResourceResource
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\SiteVerification\SiteVerificationWebResourceResource');
  }
  /**
   * Get a verification token for placing on a website or domain.
   * (webResource.getToken)
   *
   * @param Google_SiteVerificationWebResourceGettokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SiteVerification\SiteVerificationWebResourceGettokenResponse
   */
  public function getToken(\Google\Service\SiteVerification\SiteVerificationWebResourceGettokenRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getToken', array($params), 'Google\Service\SiteVerification\SiteVerificationWebResourceGettokenResponse');
  }
  /**
   * Attempt verification of a website or domain. (webResource.insert)
   *
   * @param string $verificationMethod
   * The method to use for verifying a site or domain.
   * @param Google_SiteVerificationWebResourceResource $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SiteVerification\SiteVerificationWebResourceResource
   */
  public function insert($verificationMethod, \Google\Service\SiteVerification\SiteVerificationWebResourceResource $postBody, $optParams = array())
  {
    $params = array('verificationMethod' => $verificationMethod, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\SiteVerification\SiteVerificationWebResourceResource');
  }
  /**
   * Get the list of your verified websites and domains.
   * (webResource.listWebResource)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SiteVerification\SiteVerificationWebResourceListResponse
   */
  public function listWebResource($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\SiteVerification\SiteVerificationWebResourceListResponse');
  }
  /**
   * Modify the list of owners for your website or domain. This method supports
   * patch semantics. (webResource.patch)
   *
   * @param string $id
   * The id of a verified site or domain.
   * @param Google_SiteVerificationWebResourceResource $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SiteVerification\SiteVerificationWebResourceResource
   */
  public function patch($id, \Google\Service\SiteVerification\SiteVerificationWebResourceResource $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\SiteVerification\SiteVerificationWebResourceResource');
  }
  /**
   * Modify the list of owners for your website or domain. (webResource.update)
   *
   * @param string $id
   * The id of a verified site or domain.
   * @param Google_SiteVerificationWebResourceResource $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SiteVerification\SiteVerificationWebResourceResource
   */
  public function update($id, \Google\Service\SiteVerification\SiteVerificationWebResourceResource $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\SiteVerification\SiteVerificationWebResourceResource');
  }
}
