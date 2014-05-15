<?php 
namespace Google\Service;
class Licensing extends \Google\Service
{


  public $licenseAssignments;
  

  /**
   * Constructs the internal representation of the Licensing service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'apps/licensing/v1/product/';
    $this->version = 'v1';
    $this->serviceName = 'licensing';

    $this->licenseAssignments = new \Google\Service\Licensing\Resource\LicenseAssignments(
        $this,
        $this->serviceName,
        'licenseAssignments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => '{productId}/sku/{skuId}/user/{userId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'skuId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => '{productId}/sku/{skuId}/user/{userId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'skuId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => '{productId}/sku/{skuId}/user',
              'httpMethod' => 'POST',
              'parameters' => array(
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'skuId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'listForProduct' => array(
              'path' => '{productId}/users',
              'httpMethod' => 'GET',
              'parameters' => array(
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customerId' => array(
                  'location' => 'query',
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
            ),'listForProductAndSku' => array(
              'path' => '{productId}/sku/{skuId}/users',
              'httpMethod' => 'GET',
              'parameters' => array(
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'skuId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customerId' => array(
                  'location' => 'query',
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
            ),'patch' => array(
              'path' => '{productId}/sku/{skuId}/user/{userId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'skuId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{productId}/sku/{skuId}/user/{userId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'productId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'skuId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
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
