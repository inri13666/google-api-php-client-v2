<?php 
namespace Google\Cache;
class Apc extends \Google\Cache\AbstractCache
{
  public function __construct(\Google\Client $client)
  {
    if (! function_exists('apc_add') ) {
      throw new \Google\Cache\Exception("Apc functions not available");
    }
  }

   /**
   * @inheritDoc
   */
  public function get($key, $expiration = false)
  {
    $ret = apc_fetch($key);
    if ($ret === false) {
      return false;
    }
    if (is_numeric($expiration) && (time() - $ret['time'] > $expiration)) {
      $this->delete($key);
      return false;
    }
    return $ret['data'];
  }

  /**
   * @inheritDoc
   */
  public function set($key, $value)
  {
    $rc = apc_store($key, array('time' => time(), 'data' => $value));
    if ($rc == false) {
      throw new \Google\Cache\Exception("Couldn't store data");
    }
  }

  /**
   * @inheritDoc
   * @param String $key
   */
  public function delete($key)
  {
    apc_delete($key);
  }
}
