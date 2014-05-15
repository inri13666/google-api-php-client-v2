<?php 
namespace Google\Service\Prediction\Resource;
class Hostedmodels extends \Google\Resource\Service
{

  /**
   * Submit input and request an output against a hosted model.
   * (hostedmodels.predict)
   *
   * @param string $project
   * The project associated with the model.
   * @param string $hostedModelName
   * The name of a hosted model.
   * @param Google_Input $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Prediction\Output
   */
  public function predict($project, $hostedModelName, \Google\Service\Prediction\Input $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'hostedModelName' => $hostedModelName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('predict', array($params), 'Google\Service\Prediction\Output');
  }
}
