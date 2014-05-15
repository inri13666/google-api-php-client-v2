<?php 
namespace Google\Service;
class AndroidPublisher extends \Google\Service
{
  /** View and manage your Google Play Android Developer account. */
  const ANDROIDPUBLISHER = "https://www.googleapis.com/auth/androidpublisher";

  public $inapppurchases;
  public $purchases;
  

  /**
   * Constructs the internal representation of the AndroidPublisher service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'androidpublisher/v1.1/applications/';
    $this->version = 'v1.1';
    $this->serviceName = 'androidpublisher';

    $this->inapppurchases = new \Google\Service\AndroidPublisher\Resource\Inapppurchases(
        $this,
        $this->serviceName,
        'inapppurchases',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{packageName}/inapp/{productId}/purchases/{token}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'packageName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->purchases = new \Google\Service\AndroidPublisher\Resource\Purchases(
        $this,
        $this->serviceName,
        'purchases',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => '{packageName}/subscriptions/{subscriptionId}/purchases/{token}/cancel',
              'httpMethod' => 'POST',
              'parameters' => array(
                'packageName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{packageName}/subscriptions/{subscriptionId}/purchases/{token}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'packageName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'token' => array(
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
