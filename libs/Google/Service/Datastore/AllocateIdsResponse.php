<?php 
namespace Google\Service\Datastore;
class AllocateIdsResponse extends \Google\Collection
{
  protected $headerType = 'Google\Service\Datastore\ResponseHeader';
  protected $headerDataType = '';
  protected $keysType = 'Google\Service\Datastore\Key';
  protected $keysDataType = 'array';

  public function setHeader(\Google\Service\Datastore\ResponseHeader $header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }

  public function setKeys($keys)
  {
    $this->keys = $keys;
  }

  public function getKeys()
  {
    return $this->keys;
  }
}
