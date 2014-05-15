<?php 
namespace Google\Service\Games\Resource;
class Revisions extends \Google\Resource\Service
{

  /**
   * Checks whether the games client is out of date. (revisions.check)
   *
   * @param string $clientRevision
   * The revision of the client SDK used by your application. Format:
    * [PLATFORM_TYPE]:[VERSION_NUMBER]. Possible values of PLATFORM_TYPE are:
  - "ANDROID" - Client
    * is running the Android SDK.
  - "IOS" - Client is running the iOS SDK.
  - "WEB_APP" - Client is
    * running as a Web App.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Games\RevisionCheckResponse
   */
  public function check($clientRevision, $optParams = array())
  {
    $params = array('clientRevision' => $clientRevision);
    $params = array_merge($params, $optParams);
    return $this->call('check', array($params), 'Google\Service\Games\RevisionCheckResponse');
  }
}
