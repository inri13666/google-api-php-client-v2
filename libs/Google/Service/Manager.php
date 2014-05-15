<?php 
namespace Google\Service;
class Manager extends \Google\Service
{
  /** View and manage your applications deployed on Google App Engine. */
  const APPENGINE_ADMIN = "https://www.googleapis.com/auth/appengine.admin";
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
  /** View and manage your Google Compute Engine resources. */
  const COMPUTE = "https://www.googleapis.com/auth/compute";
  /** Manage your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_WRITE = "https://www.googleapis.com/auth/devstorage.read_write";
  /** View and manage your Google Cloud Platform management resources and deployment status information. */
  const NDEV_CLOUDMAN = "https://www.googleapis.com/auth/ndev.cloudman";
  /** View your Google Cloud Platform management resources and deployment status information. */
  const NDEV_CLOUDMAN_READONLY = "https://www.googleapis.com/auth/ndev.cloudman.readonly";

  public $deployments;
  public $templates;
  

  /**
   * Constructs the internal representation of the Manager service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'manager/v1beta2/projects/';
    $this->version = 'v1beta2';
    $this->serviceName = 'manager';

    $this->deployments = new \Google\Service\Manager\Resource\Deployments(
        $this,
        $this->serviceName,
        'deployments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => '{projectId}/regions/{region}/deployments/{deploymentName}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deploymentName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{projectId}/regions/{region}/deployments/{deploymentName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deploymentName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{projectId}/regions/{region}/deployments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{projectId}/regions/{region}/deployments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->templates = new \Google\Service\Manager\Resource\Templates(
        $this,
        $this->serviceName,
        'templates',
        array(
          'methods' => array(
            'delete' => array(
              'path' => '{projectId}/templates/{templateName}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{projectId}/templates/{templateName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{projectId}/templates',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{projectId}/templates',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
  }
}
