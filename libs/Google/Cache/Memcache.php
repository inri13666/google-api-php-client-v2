<?php 
namespace Google\Cache;
class Memcache extends \Google\Cache\AbstractCache
{
  private $connection = false;
  private $mc = false;
  private $host;
  private $port;

  public function __construct(\Google\Client $client)
  {
    if (!function_exists('memcache_connect') && !class_exists("Memcached")) {
      throw new \Google\Cache\Exception("Memcache functions not available");
    }
    if ($client->isAppEngine()) {
      // No credentials needed for GAE.
      $this->mc = new Memcached();
      $this->connection = true;
    } else {
      $this->host = $client->getClassConfig($this, 'host');
      $this->port = $client->getClassConfig($this, 'port');
      if (empty($this->host) || empty($this->port)) {
        throw new \Google\Cache\Exception("You need to supply a valid memcache host and port");
      }
    }
  }
  
  /**
   * @inheritDoc
   */
  public function get($key, $expiration = false)
  {
    $this->connect();
    $ret = false;
    if ($this->mc) {
      $ret = $this->mc->get($key);
    } else {
      $ret = memcache_get($this->connection, $key);
    }
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
   * @param string $key
   * @param string $value
   * @throws \Google\Cache\Exception
   */
  public function set($key, $value)
  {
    $this->connect();
    // we store it with the cache_time default expiration so objects will at
    // least get cleaned eventually.
    $data = array('time' => time(), 'data' => $value);
    $rc = false;
    if ($this->mc) {
      $rc = $this->mc->set($key, $data);
    } else {
      $rc = memcache_set($this->connection, $key, $data, false);
    }
    if ($rc == false) {
      throw new \Google\Cache\Exception("Couldn't store data in cache");
    }
  }

  /**
   * @inheritDoc
   * @param String $key
   */
  public function delete($key)
  {
    $this->connect();
    if ($this->mc) {
      $this->mc->delete($key, 0);
    } else {
      memcache_delete($this->connection, $key, 0);
    }
  }

  /**
   * Lazy initialiser for memcache connection. Uses pconnect for to take 
   * advantage of the persistence pool where possible. 
   */
  private function connect()
  {
    if ($this->connection) {
      return;
    }

    if (class_exists("Memcached")) {
      $this->mc = new Memcached();
      $this->mc->addServer($this->host, $this->port);
       $this->connection = true;
    } else {
      $this->connection = memcache_pconnect($this->host, $this->port);
    }
    
    if (! $this->connection) {
      throw new \Google\Cache\Exception("Couldn't connect to memcache server");
    }
  }
}
