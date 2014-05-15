<?php 
namespace Google\Service\Storage;
class BucketLogging extends \Google\Model
{
  public $logBucket;
  public $logObjectPrefix;

  public function setLogBucket($logBucket)
  {
    $this->logBucket = $logBucket;
  }

  public function getLogBucket()
  {
    return $this->logBucket;
  }

  public function setLogObjectPrefix($logObjectPrefix)
  {
    $this->logObjectPrefix = $logObjectPrefix;
  }

  public function getLogObjectPrefix()
  {
    return $this->logObjectPrefix;
  }
}
