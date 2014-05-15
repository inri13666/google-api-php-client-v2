<?php 
namespace Google\Service\Datastore;
class LookupResponse extends \Google\Collection
{
  protected $deferredType = 'Google\Service\Datastore\Key';
  protected $deferredDataType = 'array';
  protected $foundType = 'Google\Service\Datastore\EntityResult';
  protected $foundDataType = 'array';
  protected $headerType = 'Google\Service\Datastore\ResponseHeader';
  protected $headerDataType = '';
  protected $missingType = 'Google\Service\Datastore\EntityResult';
  protected $missingDataType = 'array';

  public function setDeferred($deferred)
  {
    $this->deferred = $deferred;
  }

  public function getDeferred()
  {
    return $this->deferred;
  }

  public function setFound($found)
  {
    $this->found = $found;
  }

  public function getFound()
  {
    return $this->found;
  }

  public function setHeader(\Google\Service\Datastore\ResponseHeader $header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }

  public function setMissing($missing)
  {
    $this->missing = $missing;
  }

  public function getMissing()
  {
    return $this->missing;
  }
}
