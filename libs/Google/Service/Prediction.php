<?php 
namespace Google\Service;
class Prediction extends \Google\Service
{
  /** Manage your data and permissions in Google Cloud Storage. */
  const DEVSTORAGE_FULL_CONTROL = "https://www.googleapis.com/auth/devstorage.full_control";
  /** View your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_ONLY = "https://www.googleapis.com/auth/devstorage.read_only";
  /** Manage your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_WRITE = "https://www.googleapis.com/auth/devstorage.read_write";
  /** Manage your data in the Google Prediction API. */
  const PREDICTION = "https://www.googleapis.com/auth/prediction";

  public $hostedmodels;
  public $trainedmodels;
  

  /**
   * Constructs the internal representation of the Prediction service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'prediction/v1.6/projects/';
    $this->version = 'v1.6';
    $this->serviceName = 'prediction';

    $this->hostedmodels = new \Google\Service\Prediction\Resource\Hostedmodels(
        $this,
        $this->serviceName,
        'hostedmodels',
        array(
          'methods' => array(
            'predict' => array(
              'path' => '{project}/hostedmodels/{hostedModelName}/predict',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'hostedModelName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->trainedmodels = new \Google\Service\Prediction\Resource\Trainedmodels(
        $this,
        $this->serviceName,
        'trainedmodels',
        array(
          'methods' => array(
            'analyze' => array(
              'path' => '{project}/trainedmodels/{id}/analyze',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => '{project}/trainedmodels/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{project}/trainedmodels/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{project}/trainedmodels',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => '{project}/trainedmodels/list',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
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
            ),'predict' => array(
              'path' => '{project}/trainedmodels/{id}/predict',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{project}/trainedmodels/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'project' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
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
