<?php 
namespace Google\Service;
class Groupssettings extends \Google\Service
{
  /** View and manage the settings of a Google Apps Group. */
  const APPS_GROUPS_SETTINGS = "https://www.googleapis.com/auth/apps.groups.settings";

  public $groups;
  

  /**
   * Constructs the internal representation of the Groupssettings service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'groups/v1/groups/';
    $this->version = 'v1';
    $this->serviceName = 'groupssettings';

    $this->groups = new \Google\Service\Groupssettings\Resource\Groups(
        $this,
        $this->serviceName,
        'groups',
        array(
          'methods' => array(
            'get' => array(
              'path' => '{groupUniqueId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'groupUniqueId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => '{groupUniqueId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'groupUniqueId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => '{groupUniqueId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'groupUniqueId' => array(
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
