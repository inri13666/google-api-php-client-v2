<?php 
namespace Google\Service;
class Mirror extends \Google\Service
{
  /** View your location. */
  const GLASS_LOCATION = "https://www.googleapis.com/auth/glass.location";
  /** View and manage your Glass timeline. */
  const GLASS_TIMELINE = "https://www.googleapis.com/auth/glass.timeline";

  public $accounts;
  public $contacts;
  public $locations;
  public $subscriptions;
  public $timeline;
  public $timeline_attachments;
  

  /**
   * Constructs the internal representation of the Mirror service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'mirror/v1/';
    $this->version = 'v1';
    $this->serviceName = 'mirror';

    $this->accounts = new \Google\Service\Mirror\Resource\Accounts(
        $this,
        $this->serviceName,
        'accounts',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'accounts/{userToken}/{accountType}/{accountName}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userToken' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountType' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'accountName' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->contacts = new \Google\Service\Mirror\Resource\Contacts(
        $this,
        $this->serviceName,
        'contacts',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'contacts/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'contacts/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'contacts',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'contacts',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'patch' => array(
              'path' => 'contacts/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'contacts/{id}',
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
    $this->locations = new \Google\Service\Mirror\Resource\Locations(
        $this,
        $this->serviceName,
        'locations',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'locations/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'locations',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->subscriptions = new \Google\Service\Mirror\Resource\Subscriptions(
        $this,
        $this->serviceName,
        'subscriptions',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'subscriptions/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'subscriptions',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'subscriptions',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'update' => array(
              'path' => 'subscriptions/{id}',
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
    $this->timeline = new \Google\Service\Mirror\Resource\Timeline(
        $this,
        $this->serviceName,
        'timeline',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'timeline/{id}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'timeline/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'timeline',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'timeline',
              'httpMethod' => 'GET',
              'parameters' => array(
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeDeleted' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sourceItemId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pinnedOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'bundleId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'timeline/{id}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'timeline/{id}',
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
    $this->timeline_attachments = new \Google\Service\Mirror\Resource\TimelineAttachments(
        $this,
        $this->serviceName,
        'attachments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'timeline/{itemId}/attachments/{attachmentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'itemId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'attachmentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'timeline/{itemId}/attachments/{attachmentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'itemId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'attachmentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'timeline/{itemId}/attachments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'itemId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'timeline/{itemId}/attachments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'itemId' => array(
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
