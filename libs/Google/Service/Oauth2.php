<?php 
namespace Google\Service;
class Oauth2 extends \Google\Service
{
  /** Know your basic profile info and list of people in your circles.. */
  const PLUS_LOGIN = "https://www.googleapis.com/auth/plus.login";
  /** Know who you are on Google. */
  const PLUS_ME = "https://www.googleapis.com/auth/plus.me";
  /** View your email address. */
  const USERINFO_EMAIL = "https://www.googleapis.com/auth/userinfo.email";
  /** View basic information about your account. */
  const USERINFO_PROFILE = "https://www.googleapis.com/auth/userinfo.profile";

  public $userinfo;
  public $userinfo_v2_me;
  private $base_methods;

  /**
   * Constructs the internal representation of the Oauth2 service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = '';
    $this->version = 'v2';
    $this->serviceName = 'oauth2';

    $this->userinfo = new \Google\Service\Oauth2\Resource\Userinfo(
        $this,
        $this->serviceName,
        'userinfo',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'oauth2/v2/userinfo',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->userinfo_v2_me = new \Google\Service\Oauth2\Resource\UserinfoV2Me(
        $this,
        $this->serviceName,
        'me',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'userinfo/v2/me',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->base_methods = new \Google\Resource\Service(
        $this,
        $this->serviceName,
        '',
        array(
          'methods' => array(
            'tokeninfo' => array(
              'path' => 'oauth2/v2/tokeninfo',
              'httpMethod' => 'POST',
              'parameters' => array(
                'access_token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'id_token' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
  /**
   * (tokeninfo)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string access_token
   *
   * @opt_param string id_token
   *
   * @return \Google\Service\Oauth2\Tokeninfo
   */
  public function tokeninfo($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->base_methods->call('tokeninfo', array($params), 'Google\Service\Oauth2\Tokeninfo');
  }
}
