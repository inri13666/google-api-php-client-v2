<?php 
namespace Google\Service;
class Reseller extends \Google\Service
{
  /** Manage users on your domain. */
  const APPS_ORDER = "https://www.googleapis.com/auth/apps.order";
  /** Manage users on your domain. */
  const APPS_ORDER_READONLY = "https://www.googleapis.com/auth/apps.order.readonly";

  public $customers;
  public $subscriptions;
  

  /**
   * Constructs the internal representation of the Reseller service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'apps/reseller/v1/';
    $this->version = 'v1';
    $this->serviceName = 'reseller';

    $this->customers = new \Google\Service\Reseller\Resource\Customers(
        $this,
        $this->serviceName,
        'customers',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'customers/{customerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'customers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerAuthToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'customers/{customerId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'customers/{customerId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->subscriptions = new \Google\Service\Reseller\Resource\Subscriptions(
        $this,
        $this->serviceName,
        'subscriptions',
        array(
          'methods' => array(
            'changePlan' => array(
              'path' => 'customers/{customerId}/subscriptions/{subscriptionId}/changePlan',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'changeRenewalSettings' => array(
              'path' => 'customers/{customerId}/subscriptions/{subscriptionId}/changeRenewalSettings',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'changeSeats' => array(
              'path' => 'customers/{customerId}/subscriptions/{subscriptionId}/changeSeats',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'delete' => array(
              'path' => 'customers/{customerId}/subscriptions/{subscriptionId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'deletionType' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'customers/{customerId}/subscriptions/{subscriptionId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'customers/{customerId}/subscriptions',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customerAuthToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'subscriptions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'customerAuthToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'customerNamePrefix' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'startPaidService' => array(
              'path' => 'customers/{customerId}/subscriptions/{subscriptionId}/startPaidService',
              'httpMethod' => 'POST',
              'parameters' => array(
                'customerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'subscriptionId' => array(
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
