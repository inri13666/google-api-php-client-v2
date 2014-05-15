<?php 
namespace Google\Service\Datastore;
class BeginTransactionResponse extends \Google\Model
{
  protected $headerType = 'Google\Service\Datastore\ResponseHeader';
  protected $headerDataType = '';
  public $transaction;

  public function setHeader(\Google\Service\Datastore\ResponseHeader $header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
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
