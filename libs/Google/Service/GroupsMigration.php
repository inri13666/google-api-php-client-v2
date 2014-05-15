<?php 
namespace Google\Service;
class GroupsMigration extends \Google\Service
{


  public $archive;
  

  /**
   * Constructs the internal representation of the GroupsMigration service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'groups/v1/groups/';
    $this->version = 'v1';
    $this->serviceName = 'groupsmigration';

    $this->archive = new \Google\Service\GroupsMigration\Resource\Archive(
        $this,
        $this->serviceName,
        'archive',
        array(
          'methods' => array(
            'insert' => array(
              'path' => '{groupId}/archive',
              'httpMethod' => 'POST',
              'parameters' => array(
                'groupId' => array(
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
