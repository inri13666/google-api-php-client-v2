<?php 
namespace Google\Service\Manager;
class Action extends \Google\Collection
{
  public $commands;
  public $timeoutMs;

  public function setCommands($commands)
  {
    $this->commands = $commands;
  }

  public function getCommands()
  {
    return $this->commands;
  }

  public function setTimeoutMs($timeoutMs)
  {
    $this->timeoutMs = $timeoutMs;
  }

  public function getTimeoutMs()
  {
    return $this->timeoutMs;
  }
}
