<?php 
namespace Google\Service\SQLAdmin\Resource;
class Instances extends \Google\Resource\Service
{

  /**
   * Creates a Cloud SQL instance as a clone of the source instance.
   * (instances.cloneInstances)
   *
   * @param string $project
   * Project ID of the source as well as the clone Cloud SQL instance.
   * @param Google_InstancesCloneRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesCloneResponse
   */
  public function cloneInstances($project, \Google\Service\SQLAdmin\InstancesCloneRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('clone', array($params), 'Google\Service\SQLAdmin\InstancesCloneResponse');
  }
  /**
   * Deletes a Cloud SQL instance. (instances.delete)
   *
   * @param string $project
   * Project ID of the project that contains the instance to be deleted.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesDeleteResponse
   */
  public function delete($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\SQLAdmin\InstancesDeleteResponse');
  }
  /**
   * Exports data from a Cloud SQL instance to a Google Cloud Storage bucket as a
   * MySQL dump file. (instances.export)
   *
   * @param string $project
   * Project ID of the project that contains the instance to be exported.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param Google_InstancesExportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesExportResponse
   */
  public function export($project, $instance, \Google\Service\SQLAdmin\InstancesExportRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('export', array($params), 'Google\Service\SQLAdmin\InstancesExportResponse');
  }
  /**
   * Retrieves a resource containing information about a Cloud SQL instance.
   * (instances.get)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Database instance ID. This does not include the project ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\DatabaseInstance
   */
  public function get($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\SQLAdmin\DatabaseInstance');
  }
  /**
   * Imports data into a Cloud SQL instance from a MySQL dump file in Google Cloud
   * Storage. (instances.import)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param Google_InstancesImportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesImportResponse
   */
  public function import($project, $instance, \Google\Service\SQLAdmin\InstancesImportRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('import', array($params), 'Google\Service\SQLAdmin\InstancesImportResponse');
  }
  /**
   * Creates a new Cloud SQL instance. (instances.insert)
   *
   * @param string $project
   * Project ID of the project to which the newly created Cloud SQL instances should belong.
   * @param Google_DatabaseInstance $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesInsertResponse
   */
  public function insert($project, \Google\Service\SQLAdmin\DatabaseInstance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\SQLAdmin\InstancesInsertResponse');
  }
  /**
   * Lists instances under a given project in the alphabetical order of the
   * instance name. (instances.listInstances)
   *
   * @param string $project
   * Project ID of the project for which to list Cloud SQL instances.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A previously-returned page token representing part of the larger set of results to view.
   * @opt_param string maxResults
   * The maximum number of results to return per response.
   * @return \Google\Service\SQLAdmin\InstancesListResponse
   */
  public function listInstances($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\SQLAdmin\InstancesListResponse');
  }
  /**
   * Updates settings of a Cloud SQL instance. Caution: This is not a partial
   * update, so you must include values for all the settings that you want to
   * retain. For partial updates, use patch.. This method supports patch
   * semantics. (instances.patch)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param Google_DatabaseInstance $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesUpdateResponse
   */
  public function patch($project, $instance, \Google\Service\SQLAdmin\DatabaseInstance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\SQLAdmin\InstancesUpdateResponse');
  }
  /**
   * Deletes all client certificates and generates a new server SSL certificate
   * for the instance. The changes will not take effect until the instance is
   * restarted. Existing instances without a server certificate will need to call
   * this once to set a server certificate. (instances.resetSslConfig)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesResetSslConfigResponse
   */
  public function resetSslConfig($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('resetSslConfig', array($params), 'Google\Service\SQLAdmin\InstancesResetSslConfigResponse');
  }
  /**
   * Restarts a Cloud SQL instance. (instances.restart)
   *
   * @param string $project
   * Project ID of the project that contains the instance to be restarted.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesRestartResponse
   */
  public function restart($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('restart', array($params), 'Google\Service\SQLAdmin\InstancesRestartResponse');
  }
  /**
   * Restores a backup of a Cloud SQL instance. (instances.restoreBackup)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param string $backupConfiguration
   * The identifier of the backup configuration. This gets generated automatically when a backup
    * configuration is created.
   * @param string $dueTime
   * The time when this run is due to start in RFC 3339 format, for example 2012-11-15T16:19:00.094Z.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesRestoreBackupResponse
   */
  public function restoreBackup($project, $instance, $backupConfiguration, $dueTime, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'backupConfiguration' => $backupConfiguration, 'dueTime' => $dueTime);
    $params = array_merge($params, $optParams);
    return $this->call('restoreBackup', array($params), 'Google\Service\SQLAdmin\InstancesRestoreBackupResponse');
  }
  /**
   * Sets the password for the root user. (instances.setRootPassword)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param Google_InstanceSetRootPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesSetRootPasswordResponse
   */
  public function setRootPassword($project, $instance, \Google\Service\SQLAdmin\InstanceSetRootPasswordRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setRootPassword', array($params), 'Google\Service\SQLAdmin\InstancesSetRootPasswordResponse');
  }
  /**
   * Updates settings of a Cloud SQL instance. Caution: This is not a partial
   * update, so you must include values for all the settings that you want to
   * retain. For partial updates, use patch. (instances.update)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param Google_DatabaseInstance $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstancesUpdateResponse
   */
  public function update($project, $instance, \Google\Service\SQLAdmin\DatabaseInstance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\SQLAdmin\InstancesUpdateResponse');
  }
}
