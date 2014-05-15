<?php 
namespace Google\Service;
class Doubleclicksearch extends \Google\Service
{
  /** View and manage your advertising data in DoubleClick Search. */
  const DOUBLECLICKSEARCH = "https://www.googleapis.com/auth/doubleclicksearch";

  public $conversion;
  public $reports;
  public $savedColumns;
  

  /**
   * Constructs the internal representation of the Doubleclicksearch service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'doubleclicksearch/v2/';
    $this->version = 'v2';
    $this->serviceName = 'doubleclicksearch';

    $this->conversion = new \Google\Service\Doubleclicksearch\Resource\Conversion(
        $this,
        $this->serviceName,
        'conversion',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'agency/{agencyId}/advertiser/{advertiserId}/engine/{engineAccountId}/conversion',
              'httpMethod' => 'GET',
              'parameters' => array(
                'agencyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'advertiserId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'engineAccountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'rowCount' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startRow' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'adGroupId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'campaignId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'adId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'criterionId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'conversion',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'conversion',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'advertiserId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'agencyId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'endDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'engineAccountId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'rowCount' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startDate' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'startRow' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'conversion',
              'httpMethod' => 'PUT',
              'parameters' => array(),
            ),'updateAvailability' => array(
              'path' => 'conversion/updateAvailability',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->reports = new \Google\Service\Doubleclicksearch\Resource\Reports(
        $this,
        $this->serviceName,
        'reports',
        array(
          'methods' => array(
            'generate' => array(
              'path' => 'reports/generate',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'reports/{reportId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'getFile' => array(
              'path' => 'reports/{reportId}/files/{reportFragment}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'reportId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'reportFragment' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'request' => array(
              'path' => 'reports',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->savedColumns = new \Google\Service\Doubleclicksearch\Resource\SavedColumns(
        $this,
        $this->serviceName,
        'savedColumns',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'agency/{agencyId}/advertiser/{advertiserId}/savedcolumns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'agencyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'advertiserId' => array(
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
