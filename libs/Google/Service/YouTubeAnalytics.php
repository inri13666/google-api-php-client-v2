<?php 
namespace Google\Service;
class YouTubeAnalytics extends \Google\Service
{
  /** View YouTube Analytics monetary reports for your YouTube content. */
  const YT_ANALYTICS_MONETARY_READONLY = "https://www.googleapis.com/auth/yt-analytics-monetary.readonly";
  /** View YouTube Analytics reports for your YouTube content. */
  const YT_ANALYTICS_READONLY = "https://www.googleapis.com/auth/yt-analytics.readonly";

  public $batchReportDefinitions;
  public $batchReports;
  public $reports;
  

  /**
   * Constructs the internal representation of the YouTubeAnalytics service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'youtube/analytics/v1/';
    $this->version = 'v1';
    $this->serviceName = 'youtubeAnalytics';

    $this->batchReportDefinitions = new \Google\Service\YouTubeAnalytics\Resource\BatchReportDefinitions(
        $this,
        $this->serviceName,
        'batchReportDefinitions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'batchReportDefinitions',
              'httpMethod' => 'GET',
              'parameters' => array(
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->batchReports = new \Google\Service\YouTubeAnalytics\Resource\BatchReports(
        $this,
        $this->serviceName,
        'batchReports',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'batchReports',
              'httpMethod' => 'GET',
              'parameters' => array(
                'batchReportDefinitionId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'onBehalfOfContentOwner' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->reports = new \Google\Service\YouTubeAnalytics\Resource\Reports(
        $this,
        $this->serviceName,
        'reports',
        array(
          'methods' => array(
            'query' => array(
              'path' => 'reports',
              'httpMethod' => 'GET',
              'parameters' => array(
                'ids' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'start-date' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'end-date' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'metrics' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'dimensions' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'filters' => array(
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
