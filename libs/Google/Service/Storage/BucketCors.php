<?php 
namespace Google\Service\Storage;
class BucketCors extends \Google\Collection
{
  public $maxAgeSeconds;
  public $method;
  public $origin;
  public $responseHeader;

  public function setMaxAgeSeconds($maxAgeSeconds)
  {
    $this->maxAgeSeconds = $maxAgeSeconds;
  }

  public function getMaxAgeSeconds()
  {
    return $this->maxAgeSeconds;
  }

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }

  public function getOrigin()
  {
    return $this->origin;
  }

  public function setResponseHeader($responseHeader)
  {
    $this->responseHeader = $responseHeader;
  }

  public function getResponseHeader()
  {
    return $this->responseHeader;
  }
}
