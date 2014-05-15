<?php 
namespace Google\Service\Datastore;
class BeginTransactionRequest extends \Google\Model
{
  public $isolationLevel;

  public function setIsolationLevel($isolationLevel)
  {
    $this->isolationLevel = $isolationLevel;
  }

  public function getIsolationLevel()
  {
    return $this->isolationLevel;
  }
}
