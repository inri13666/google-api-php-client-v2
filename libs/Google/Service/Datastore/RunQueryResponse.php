<?php 
namespace Google\Service\Datastore;
class RunQueryResponse extends \Google\Model
{
  protected $batchType = 'Google\Service\Datastore\QueryResultBatch';
  protected $batchDataType = '';
  protected $headerType = 'Google\Service\Datastore\ResponseHeader';
  protected $headerDataType = '';

  public function setBatch(\Google\Service\Datastore\QueryResultBatch $batch)
  {
    $this->batch = $batch;
  }

  public function getBatch()
  {
    return $this->batch;
  }

  public function setHeader(\Google\Service\Datastore\ResponseHeader $header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }
}
