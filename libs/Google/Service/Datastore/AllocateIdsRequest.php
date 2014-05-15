<?php 
namespace Google\Service\Datastore;
class AllocateIdsRequest extends \Google\Collection
{
  protected $keysType = 'Google\Service\Datastore\Key';
  protected $keysDataType = 'array';

  public function setKeys($keys)
  {
    $this->keys = $keys;
  }

  public function getKeys()
  {
    return $this->keys;
  }
}
