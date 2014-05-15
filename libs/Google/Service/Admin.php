<?php 
namespace Google\Service;
class Admin extends \Google\Service
{
  /** Manage email messages of users on your domain. */
  const EMAIL_MIGRATION = "https://www.googleapis.com/auth/email.migration";

  public $mail;
  

  /**
   * Constructs the internal representation of the Admin service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'email/v2/users/';
    $this->version = 'email_migration_v2';
    $this->serviceName = 'admin';

    $this->mail = new \Google\Service\Admin\Resource\Mail(
        $this,
        $this->serviceName,
        'mail',
        array(
          'methods' => array(
            'insert' => array(
              'path' => '{userKey}/mail',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userKey' => array(
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
