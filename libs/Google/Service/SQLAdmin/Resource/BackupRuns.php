<?php 
namespace Google\Service\SQLAdmin\Resource;
class BackupRuns extends \Google\Resource\Service
{

  /**
   * Retrieves a resource containing information about a backup run.
   * (backupRuns.get)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param string $backupConfiguration
   * Identifier for the backup configuration. This gets generated automatically when a backup
    * configuration is created.
   * @param string $dueTime
   * The time when this run is due to start in RFC 3339 format, for example 2012-11-15T16:19:00.094Z.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\BackupRun
   */
  public function get($project, $instance, $backupConfiguration, $dueTime, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'backupConfiguration' => $backupConfiguration, 'dueTime' => $dueTime);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\SQLAdmin\BackupRun');
  }
  /**
   * Lists all backup runs associated with a given instance and configuration in
   * the reverse chronological order of the enqueued time.
   * (backupRuns.listBackupRuns)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param string $backupConfiguration
   * Identifier for the backup configuration. This gets generated automatically when a backup
    * configuration is created.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A previously-returned page token representing part of the larger set of results to view.
   * @opt_param int maxResults
   * Maximum number of backup runs per response.
   * @return \Google\Service\SQLAdmin\BackupRunsListResponse
   */
  public function listBackupRuns($project, $instance, $backupConfiguration, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'backupConfiguration' => $backupConfiguration);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\SQLAdmin\BackupRunsListResponse');
  }
}
