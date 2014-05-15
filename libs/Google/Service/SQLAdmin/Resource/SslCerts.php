<?php 
namespace Google\Service\SQLAdmin\Resource;
class SslCerts extends \Google\Resource\Service
{

  /**
   * Deletes the SSL certificate. The change will not take effect until the
   * instance is restarted. (sslCerts.delete)
   *
   * @param string $project
   * Project ID of the project that contains the instance to be deleted.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param string $sha1Fingerprint
   * Sha1 FingerPrint.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\SslCertsDeleteResponse
   */
  public function delete($project, $instance, $sha1Fingerprint, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'sha1Fingerprint' => $sha1Fingerprint);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\SQLAdmin\SslCertsDeleteResponse');
  }
  /**
   * Retrieves a particular SSL certificate. Does not include the private key
   * (required for usage). The private key must be saved from the response to
   * initial creation. (sslCerts.get)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param string $sha1Fingerprint
   * Sha1 FingerPrint.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\SslCert
   */
  public function get($project, $instance, $sha1Fingerprint, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'sha1Fingerprint' => $sha1Fingerprint);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\SQLAdmin\SslCert');
  }
  /**
   * Creates an SSL certificate and returns it along with the private key and
   * server certificate authority. The new certificate will not be usable until
   * the instance is restarted. (sslCerts.insert)
   *
   * @param string $project
   * Project ID of the project to which the newly created Cloud SQL instances should belong.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param Google_SslCertsInsertRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\SslCertsInsertResponse
   */
  public function insert($project, $instance, \Google\Service\SQLAdmin\SslCertsInsertRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\SQLAdmin\SslCertsInsertResponse');
  }
  /**
   * Lists all of the current SSL certificates for the instance.
   * (sslCerts.listSslCerts)
   *
   * @param string $project
   * Project ID of the project for which to list Cloud SQL instances.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\SslCertsListResponse
   */
  public function listSslCerts($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\SQLAdmin\SslCertsListResponse');
  }
}
