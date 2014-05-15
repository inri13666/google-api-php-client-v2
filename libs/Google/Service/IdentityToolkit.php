<?php 
namespace Google\Service;
class IdentityToolkit extends \Google\Service
{


  public $relyingparty;
  

  /**
   * Constructs the internal representation of the IdentityToolkit service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'identitytoolkit/v3/relyingparty/';
    $this->version = 'v3';
    $this->serviceName = 'identitytoolkit';

    $this->relyingparty = new \Google\Service\IdentityToolkit\Resource\Relyingparty(
        $this,
        $this->serviceName,
        'relyingparty',
        array(
          'methods' => array(
            'createAuthUri' => array(
              'path' => 'createAuthUri',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'deleteAccount' => array(
              'path' => 'deleteAccount',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'downloadAccount' => array(
              'path' => 'downloadAccount',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getAccountInfo' => array(
              'path' => 'getAccountInfo',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getOobConfirmationCode' => array(
              'path' => 'getOobConfirmationCode',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'getPublicKeys' => array(
              'path' => 'publicKeys',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'resetPassword' => array(
              'path' => 'resetPassword',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'setAccountInfo' => array(
              'path' => 'setAccountInfo',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'uploadAccount' => array(
              'path' => 'uploadAccount',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'verifyAssertion' => array(
              'path' => 'verifyAssertion',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'verifyPassword' => array(
              'path' => 'verifyPassword',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
