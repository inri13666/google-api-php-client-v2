<?php 
namespace Google\Service\Datastore;
class RollbackRequest extends \Google\Model
{
  public $transaction;

  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }

  public function getTransaction()
  {
    return $this->transaction;
  }
}
