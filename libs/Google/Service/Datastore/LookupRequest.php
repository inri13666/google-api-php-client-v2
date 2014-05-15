<?php 
namespace Google\Service\Datastore;
class LookupRequest extends \Google\Collection
{
  protected $keysType = 'Google\Service\Datastore\Key';
  protected $keysDataType = 'array';
  protected $readOptionsType = 'Google\Service\Datastore\ReadOptions';
  protected $readOptionsDataType = '';

  public function setKeys($keys)
  {
    $this->keys = $keys;
  }

  public function getKeys()
  {
    return $this->keys;
  }

  public function setReadOptions(\Google\Service\Datastore\ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }

  public function getReadOptions()
  {
    return $this->readOptions;
  }
}
