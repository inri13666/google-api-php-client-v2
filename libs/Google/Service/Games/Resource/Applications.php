<?php 
namespace Google\Service\Games\Resource;
class Applications extends \Google\Resource\Service
{

  /**
   * Retrieves the metadata of the application with the given ID. If the requested
   * application is not available for the specified platformType, the returned
   * response will not include any instance data. (applications.get)
   *
   * @param string $applicationId
   * The application being requested.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string platformType
   * Restrict application details returned to the specific platform.
   * @opt_param string language
   * The preferred language to use for strings returned by this method.
   * @return \Google\Service\Games\Application
   */
  public function get($applicationId, $optParams = array())
  {
    $params = array('applicationId' => $applicationId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Games\Application');
  }
  /**
   * Indicate that the the currently authenticated user is playing your
   * application. (applications.played)
   *
   * @param array $optParams Optional parameters.
   */
  public function played($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('played', array($params));
  }
}
