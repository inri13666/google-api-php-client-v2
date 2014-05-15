<?php 
namespace Google\Service\Prediction\Resource;
class Trainedmodels extends \Google\Resource\Service
{

  /**
   * Get analysis of the model and the data the model was trained on.
   * (trainedmodels.analyze)
   *
   * @param string $project
   * The project associated with the model.
   * @param string $id
   * The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Prediction\Analyze
   */
  public function analyze($project, $id, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('analyze', array($params), 'Google\Service\Prediction\Analyze');
  }
  /**
   * Delete a trained model. (trainedmodels.delete)
   *
   * @param string $project
   * The project associated with the model.
   * @param string $id
   * The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   */
  public function delete($project, $id, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Check training status of your model. (trainedmodels.get)
   *
   * @param string $project
   * The project associated with the model.
   * @param string $id
   * The unique name for the predictive model.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Prediction\Insert2
   */
  public function get($project, $id, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Prediction\Insert2');
  }
  /**
   * Train a Prediction API model. (trainedmodels.insert)
   *
   * @param string $project
   * The project associated with the model.
   * @param Google_Insert $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Prediction\Insert2
   */
  public function insert($project, \Google\Service\Prediction\Insert $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Prediction\Insert2');
  }
  /**
   * List available models. (trainedmodels.listTrainedmodels)
   *
   * @param string $project
   * The project associated with the model.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Pagination token.
   * @opt_param string maxResults
   * Maximum number of results to return.
   * @return \Google\Service\Prediction\PredictionList
   */
  public function listTrainedmodels($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Prediction\PredictionList');
  }
  /**
   * Submit model id and request a prediction. (trainedmodels.predict)
   *
   * @param string $project
   * The project associated with the model.
   * @param string $id
   * The unique name for the predictive model.
   * @param Google_Input $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Prediction\Output
   */
  public function predict($project, $id, \Google\Service\Prediction\Input $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('predict', array($params), 'Google\Service\Prediction\Output');
  }
  /**
   * Add new data to a trained model. (trainedmodels.update)
   *
   * @param string $project
   * The project associated with the model.
   * @param string $id
   * The unique name for the predictive model.
   * @param Google_Update $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Prediction\Insert2
   */
  public function update($project, $id, \Google\Service\Prediction\Update $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Prediction\Insert2');
  }
}
