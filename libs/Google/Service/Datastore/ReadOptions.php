<?php 
namespace Google\Service\Datastore;
class ReadOptions extends \Google\Model
{
  public $readConsistency;
  public $transaction;

  public function setReadConsistency($readConsistency)
  {
    $this->readConsistency = $readConsistency;
  }

  public function getReadConsistency()
  {
    return $this->readConsistency;
  }

  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }

  public function getTransaction()
  {
    return $this->transaction;
  }
}
