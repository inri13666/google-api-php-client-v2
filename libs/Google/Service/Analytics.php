<?php 
namespace Google\Service;
class Analytics extends \Google\Service
{
  /** View and manage your Google Analytics data. */
  const ANALYTICS = "https://www.googleapis.com/auth/analytics";
  /** Edit Google Analytics management entities. */
  const ANALYTICS_EDIT = "https://www.googleapis.com/auth/analytics.edit";
  /** Manage Google Analytics Account users by email address. */
  const ANALYTICS_MANAGE_USERS = "https://www.googleapis.com/auth/analytics.manage.users";
  /** View your Google Analytics data. */
  const ANALYTICS_READONLY = "https://www.googleapis.com/auth/analytics.readonly";

  public $data_ga;
  public $data_mcf;
  public $data_realtime;
  public $management_accountSummaries;
  public $management_accountUserLinks;
  public $management_accounts;
  public $management_customDataSources;
  public $management_dailyUploads;
  public $management_experiments;
  public $management_goals;
  public $management_profileUserLinks;
  public $management_profiles;
  public $management_segments;
  public $management_uploads;
  public $management_webproperties;
  public $management_webpropertyUserLinks;
  public $metadata_columns;
  

  /**
   * Constructs the internal representation of the Analytics service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'analytics/v3/';
    $this->version = 'v3';
    $this->serviceName = 'analytics';

    $this->data_ga = new \Google\Service\Analytics\Resource\DataGa(
        $this,
        $this->serviceName,
        'ga',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'data/ga',
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
                'segment' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'samplingLevel' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'output' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->data_mcf = new \Google\Service\Analytics\Resource\DataMcf(
        $this,
        $this->serviceName,
        'mcf',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'data/mcf',
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
                'samplingLevel' => array(
                  'location' => 'query',
                  'type' => 'string',
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
    $this->data_realtime = new \Google\Service\Analytics\Resource\DataRealtime(
        $this,
        $this->serviceName,
        'realtime',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'data/realtime',
              'httpMethod' => 'GET',
              'parameters' => array(
                'ids' => array(
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
                'filters' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->management_accountSummaries = new \Google\Service\Analytics\Resource\ManagementAccountSummaries(
        $this,
        $this->serviceName,
        'accountSummaries',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/accountSummaries',
              'httpMethod' => 'GET',
              'parameters' => array(
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_accountUserLinks = new \Google\Service\Analytics\Resource\ManagementAccountUserLinks(
        $this,
        $this->serviceName,
        'accountUserLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks/{linkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/entityUserLinks/{linkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_accounts = new \Google\Service\Analytics\Resource\ManagementAccounts(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/accounts',
              'httpMethod' => 'GET',
              'parameters' => array(
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_customDataSources = new \Google\Service\Analytics\Resource\ManagementCustomDataSources(
        $this,
        $this->serviceName,
        'customDataSources',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_dailyUploads = new \Google\Service\Analytics\Resource\ManagementDailyUploads(
        $this,
        $this->serviceName,
        'dailyUploads',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'date' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
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
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'upload' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'date' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'appendNumber' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'reset' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->management_experiments = new \Google\Service\Analytics\Resource\ManagementExperiments(
        $this,
        $this->serviceName,
        'experiments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'experimentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_goals = new \Google\Service\Analytics\Resource\ManagementGoals(
        $this,
        $this->serviceName,
        'goals',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'goalId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'goalId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'goalId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_profileUserLinks = new \Google\Service\Analytics\Resource\ManagementProfileUserLinks(
        $this,
        $this->serviceName,
        'profileUserLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_profiles = new \Google\Service\Analytics\Resource\ManagementProfiles(
        $this,
        $this->serviceName,
        'profiles',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'profileId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_segments = new \Google\Service\Analytics\Resource\ManagementSegments(
        $this,
        $this->serviceName,
        'segments',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'management/segments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->management_uploads = new \Google\Service\Analytics\Resource\ManagementUploads(
        $this,
        $this->serviceName,
        'uploads',
        array(
          'methods' => array(
            'deleteUploadData' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/deleteUploadData',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads/{uploadId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'uploadId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'uploadData' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'customDataSourceId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_webproperties = new \Google\Service\Analytics\Resource\ManagementWebproperties(
        $this,
        $this->serviceName,
        'webproperties',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->management_webpropertyUserLinks = new \Google\Service\Analytics\Resource\ManagementWebpropertyUserLinks(
        $this,
        $this->serviceName,
        'webpropertyUserLinks',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks',
              'httpMethod' => 'POST',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks',
              'httpMethod' => 'GET',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'max-results' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'start-index' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'update' => array(
              'path' => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'accountId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'webPropertyId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'linkId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->metadata_columns = new \Google\Service\Analytics\Resource\MetadataColumns(
        $this,
        $this->serviceName,
        'columns',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'metadata/{reportType}/columns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'reportType' => array(
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
