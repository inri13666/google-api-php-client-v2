<?php 
namespace Google\Service;
class Reports extends \Google\Service
{
  /** View audit reports of Google Apps for your domain. */
  const ADMIN_REPORTS_AUDIT_READONLY = "https://www.googleapis.com/auth/admin.reports.audit.readonly";
  /** View usage reports of Google Apps for your domain. */
  const ADMIN_REPORTS_USAGE_READONLY = "https://www.googleapis.com/auth/admin.reports.usage.readonly";

  public $activities;
  public $channels;
  public $customerUsageReports;
  public $userUsageReport;
  

  /**
   * Constructs the internal representation of the Reports service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'admin/reports/v1/';
    $this->version = 'reports_v1';
    $this->serviceName = 'admin';

    $this->activities = new \Google\Service\Reports\Resource\Activities(
        $this,
        $this->serviceName,
        'activities',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'activity/users/{userKey}/applications/{applicationName}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'applicationName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'actorIpAddress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'eventName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'watch' => array(
              'path' => 'activity/users/{userKey}/applications/{applicationName}/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'applicationName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'actorIpAddress' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'eventName' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->channels = new \Google\Service\Reports\Resource\Channels(
        $this,
        $this->serviceName,
        'channels',
        array(
          'methods' => array(
            'stop' => array(
              'path' => '/admin/reports_v1/channels/stop',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->customerUsageReports = new \Google\Service\Reports\Resource\CustomerUsageReports(
        $this,
        $this->serviceName,
        'customerUsageReports',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'usage/dates/{date}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'date' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'parameters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->userUsageReport = new \Google\Service\Reports\Resource\UserUsageReport(
        $this,
        $this->serviceName,
        'userUsageReport',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'usage/users/{userKey}/dates/{date}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userKey' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'date' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'parameters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'customerId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}
