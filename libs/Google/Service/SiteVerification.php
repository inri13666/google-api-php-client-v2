<?php 
namespace Google\Service;
class SiteVerification extends \Google\Service
{
  /** Manage the list of sites and domains you control. */
  const SITEVERIFICATION = "https://www.googleapis.com/auth/siteverification";
  /** Manage your new site verifications with Google. */
  const SITEVERIFICATION_VERIFY_ONLY = "https://www.googleapis.com/auth/siteverification.verify_only";

  public $webResource;
  

  /**
   * Constructs the internal representation of the SiteVerification service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'siteVerification/v1/';
    $this->version = 'v1';
    $this->serviceName = 'siteVerification';

    $this->webResource = new \Google\Service\SiteVerification\Resource\WebResource(
        $this,
        $this->serviceName,
        'webResource',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'webResource/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'webResource/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getToken' => array(
              'path' => 'token',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'insert' => array(
              'path' => 'webResource',
              'httpMethod' => 'POST',
              'parameters' => array(
                'verificationMethod' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'webResource',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'webResource/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'webResource/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
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
