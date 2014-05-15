<?php 
namespace Google\Service\Datastore;
class CommitRequest extends \Google\Model
{
  public $mode;
  protected $mutationType = 'Google\Service\Datastore\Mutation';
  protected $mutationDataType = '';
  public $transaction;

  public function setMode($mode)
  {
    $this->mode = $mode;
  }

  public function getMode()
  {
    return $this->mode;
  }

  public function setMutation(\Google\Service\Datastore\Mutation $mutation)
  {
    $this->mutation = $mutation;
  }

  public function getMutation()
  {
    return $this->mutation;
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
