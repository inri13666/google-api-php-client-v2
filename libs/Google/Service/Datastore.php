<?php 
namespace Google\Service;
class Datastore extends \Google\Service
{
  /** View and manage your Google Cloud Datastore data. */
  const DATASTORE = "https://www.googleapis.com/auth/datastore";
  /** View your email address. */
  const USERINFO_EMAIL = "https://www.googleapis.com/auth/userinfo.email";

  public $datasets;
  

  /**
   * Constructs the internal representation of the Datastore service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'datastore/v1beta2/datasets/';
    $this->version = 'v1beta2';
    $this->serviceName = 'datastore';

    $this->datasets = new \Google\Service\Datastore\Resource\Datasets(
        $this,
        $this->serviceName,
        'datasets',
        array(
          'methods' => array(
            'allocateIds' => array(
              'path' => '{datasetId}/allocateIds',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'beginTransaction' => array(
              'path' => '{datasetId}/beginTransaction',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'commit' => array(
              'path' => '{datasetId}/commit',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'lookup' => array(
              'path' => '{datasetId}/lookup',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'rollback' => array(
              'path' => '{datasetId}/rollback',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'runQuery' => array(
              'path' => '{datasetId}/runQuery',
              'httpMethod' => 'POST',
              'parameters' => array(
                'datasetId' => array(
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
