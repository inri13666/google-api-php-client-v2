<?php 
namespace Google\Cache;
abstract class AbstractCache
{
  
  abstract public function __construct(\Google\Client $client);

  /**
   * Retrieves the data for the given key, or false if they
   * key is unknown or expired
   *
   * @param String $key The key who's data to retrieve
   * @param boolean|int $expiration Expiration time in seconds
   *
   */
  abstract public function get($key, $expiration = false);

  /**
   * Store the key => $value set. The $value is serialized
   * by this function so can be of any type
   *
   * @param string $key Key of the data
   * @param string $value data
   */
  abstract public function set($key, $value);

  /**
   * Removes the key/data pair for the given $key
   *
   * @param String $key
   */
  abstract public function delete($key);
}
