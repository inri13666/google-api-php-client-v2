<?php 
namespace Google\Cache;
class Null extends \Google\Cache\AbstractCache
{
  public function __construct(\Google\Client $client)
  {

  }

   /**
   * @inheritDoc
   */
  public function get($key, $expiration = false)
  {
    return false;
  }

  /**
   * @inheritDoc
   */
  public function set($key, $value)
  {
    // Nop.
  }

  /**
   * @inheritDoc
   * @param String $key
   */
  public function delete($key)
  {
    // Nop.
  }
}
