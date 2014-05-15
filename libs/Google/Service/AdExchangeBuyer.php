<?php 
namespace Google\Service;
class AdExchangeBuyer extends \Google\Service
{
  /** Manage your Ad Exchange buyer account configuration. */
  const ADEXCHANGE_BUYER = "https://www.googleapis.com/auth/adexchange.buyer";

  public $accounts;
  public $creatives;
  public $directDeals;
  public $performanceReport;
  

  /**
   * Constructs the internal representation of the AdExchangeBuyer service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'adexchangebuyer/v1.3/';
    $this->version = 'v1.3';
    $this->serviceName = 'adexchangebuyer';

    $this->accounts = new \Google\Service\AdExchangeBuyer\Resource\Accounts(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'accounts/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'accounts',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'accounts/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'accounts/{id}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->creatives = new \Google\Service\AdExchangeBuyer\Resource\Creatives(
        $this,
        $this->serviceName,
        'creatives',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'creatives/{accountId}/{buyerCreativeId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'buyerCreativeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'creatives',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'creatives',
              'httpMethod' => 'GET',
              'parameters' => array(
                'statusFilter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'buyerCreativeId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'accountId' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->directDeals = new \Google\Service\AdExchangeBuyer\Resource\DirectDeals(
        $this,
        $this->serviceName,
        'directDeals',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'directdeals/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'directdeals',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->performanceReport = new \Google\Service\AdExchangeBuyer\Resource\PerformanceReport(
        $this,
        $this->serviceName,
        'performanceReport',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'performancereport',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDateTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'startDateTime' => array(
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
            ),
          )
        )
    );
  }
}
