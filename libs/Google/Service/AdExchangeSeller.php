<?php 
namespace Google\Service;
class AdExchangeSeller extends \Google\Service
{
  /** View and manage your Ad Exchange data. */
  const ADEXCHANGE_SELLER = "https://www.googleapis.com/auth/adexchange.seller";
  /** View your Ad Exchange data. */
  const ADEXCHANGE_SELLER_READONLY = "https://www.googleapis.com/auth/adexchange.seller.readonly";

  public $accounts;
  public $adclients;
  public $adunits;
  public $adunits_customchannels;
  public $alerts;
  public $customchannels;
  public $customchannels_adunits;
  public $metadata_dimensions;
  public $metadata_metrics;
  public $preferreddeals;
  public $reports;
  public $reports_saved;
  public $urlchannels;
  

  /**
   * Constructs the internal representation of the AdExchangeSeller service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'adexchangeseller/v1.1/';
    $this->version = 'v1.1';
    $this->serviceName = 'adexchangeseller';

    $this->accounts = new \Google\Service\AdExchangeSeller\Resource\Accounts(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'accounts/{accountId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->adclients = new \Google\Service\AdExchangeSeller\Resource\Adclients(
        $this,
        $this->serviceName,
        'adclients',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'adclients',
              'httpMethod' => 'GET',
              'parameters' => array(
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
    $this->adunits = new \Google\Service\AdExchangeSeller\Resource\Adunits(
        $this,
        $this->serviceName,
        'adunits',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'adclients/{adClientId}/adunits/{adUnitId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adClientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'adUnitId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'adclients/{adClientId}/adunits',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adClientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeInactive' => array(
                  'location' => 'query',
                  'type' => 'boolean',
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
    $this->adunits_customchannels = new \Google\Service\AdExchangeSeller\Resource\AdunitsCustomchannels(
        $this,
        $this->serviceName,
        'customchannels',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'adclients/{adClientId}/adunits/{adUnitId}/customchannels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adClientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'adUnitId' => array(
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
    $this->alerts = new \Google\Service\AdExchangeSeller\Resource\Alerts(
        $this,
        $this->serviceName,
        'alerts',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'alerts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'locale' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->customchannels = new \Google\Service\AdExchangeSeller\Resource\Customchannels(
        $this,
        $this->serviceName,
        'customchannels',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'adclients/{adClientId}/customchannels/{customChannelId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adClientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customChannelId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'adclients/{adClientId}/customchannels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adClientId' => array(
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
    $this->customchannels_adunits = new \Google\Service\AdExchangeSeller\Resource\CustomchannelsAdunits(
        $this,
        $this->serviceName,
        'adunits',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'adclients/{adClientId}/customchannels/{customChannelId}/adunits',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adClientId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customChannelId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeInactive' => array(
                  'location' => 'query',
                  'type' => 'boolean',
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
    $this->metadata_dimensions = new \Google\Service\AdExchangeSeller\Resource\MetadataDimensions(
        $this,
        $this->serviceName,
        'dimensions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'metadata/dimensions',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->metadata_metrics = new \Google\Service\AdExchangeSeller\Resource\MetadataMetrics(
        $this,
        $this->serviceName,
        'metrics',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'metadata/metrics',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->preferreddeals = new \Google\Service\AdExchangeSeller\Resource\Preferreddeals(
        $this,
        $this->serviceName,
        'preferreddeals',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'preferreddeals/{dealId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'dealId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'preferreddeals',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->reports = new \Google\Service\AdExchangeSeller\Resource\Reports(
        $this,
        $this->serviceName,
        'reports',
        array(
          'methods' => array(
            'generate' => array(
              'path' => 'reports',
              'httpMethod' => 'GET',
              'parameters' => array(
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'locale' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'metric' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'startIndex' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'dimension' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->reports_saved = new \Google\Service\AdExchangeSeller\Resource\ReportsSaved(
        $this,
        $this->serviceName,
        'saved',
        array(
          'methods' => array(
            'generate' => array(
              'path' => 'reports/{savedReportId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'savedReportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'locale' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startIndex' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'list' => array(
              'path' => 'reports/saved',
              'httpMethod' => 'GET',
              'parameters' => array(
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
    $this->urlchannels = new \Google\Service\AdExchangeSeller\Resource\Urlchannels(
        $this,
        $this->serviceName,
        'urlchannels',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'adclients/{adClientId}/urlchannels',
              'httpMethod' => 'GET',
              'parameters' => array(
                'adClientId' => array(
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
