<?php 
namespace Google\Service\Replicapool;
class Action extends \Google\Collection
{
  public $commands;
  protected $envVariablesType = 'Google\Service\Replicapool\EnvVariable';
  protected $envVariablesDataType = 'array';
  public $timeoutMilliSeconds;

  public function setCommands($commands)
  {
    $this->commands = $commands;
  }

  public function getCommands()
  {
    return $this->commands;
  }

  public function setEnvVariables($envVariables)
  {
    $this->envVariables = $envVariables;
  }

  public function getEnvVariables()
  {
    return $this->envVariables;
  }

  public function setTimeoutMilliSeconds($timeoutMilliSeconds)
  {
    $this->timeoutMilliSeconds = $timeoutMilliSeconds;
  }

  public function getTimeoutMilliSeconds()
  {
    return $this->timeoutMilliSeconds;
  }
}
