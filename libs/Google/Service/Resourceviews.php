<?php 
namespace Google\Service;
class Resourceviews extends \Google\Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM = "https://www.googleapis.com/auth/cloud-platform";
  /** View and manage your Google Cloud Platform management resources and deployment status information. */
  const NDEV_CLOUDMAN = "https://www.googleapis.com/auth/ndev.cloudman";
  /** View your Google Cloud Platform management resources and deployment status information. */
  const NDEV_CLOUDMAN_READONLY = "https://www.googleapis.com/auth/ndev.cloudman.readonly";

  public $regionViews;
  public $zoneViews;
  

  /**
   * Constructs the internal representation of the Resourceviews service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'resourceviews/v1beta1/projects/';
    $this->version = 'v1beta1';
    $this->serviceName = 'resourceviews';

    $this->regionViews = new \Google\Service\Resourceviews\Resource\RegionViews(
        $this,
        $this->serviceName,
        'regionViews',
        array(
          'methods' => array(
            'addresources' => array(
              'path' => '{projectName}/regions/{region}/resourceViews/{resourceViewName}/addResources',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{projectName}/regions/{region}/resourceViews/{resourceViewName}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{projectName}/regions/{region}/resourceViews/{resourceViewName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{projectName}/regions/{region}/resourceViews',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
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
              'path' => '{projectName}/regions/{region}/resourceViews',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectName' => array(
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
            ),'listresources' => array(
              'path' => '{projectName}/regions/{region}/resourceViews/{resourceViewName}/resources',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
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
            ),'removeresources' => array(
              'path' => '{projectName}/regions/{region}/resourceViews/{resourceViewName}/removeResources',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'region' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->zoneViews = new \Google\Service\Resourceviews\Resource\ZoneViews(
        $this,
        $this->serviceName,
        'zoneViews',
        array(
          'methods' => array(
            'addresources' => array(
              'path' => '{projectName}/zones/{zone}/resourceViews/{resourceViewName}/addResources',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zone' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{projectName}/zones/{zone}/resourceViews/{resourceViewName}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zone' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{projectName}/zones/{zone}/resourceViews/{resourceViewName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zone' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{projectName}/zones/{zone}/resourceViews',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zone' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{projectName}/zones/{zone}/resourceViews',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zone' => array(
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
            ),'listresources' => array(
              'path' => '{projectName}/zones/{zone}/resourceViews/{resourceViewName}/resources',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zone' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
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
            ),'removeresources' => array(
              'path' => '{projectName}/zones/{zone}/resourceViews/{resourceViewName}/removeResources',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'zone' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'resourceViewName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
