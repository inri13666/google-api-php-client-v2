<?php 
namespace Google\Service\SQLAdmin;
class ImportContext extends \Google\Collection
{
  public $database;
  public $kind;
  public $uri;

  public function setDatabase($database)
  {
    $this->database = $database;
  }

  public function getDatabase()
  {
    return $this->database;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUri($uri)
  {
    $this->uri = $uri;
  }

  public function getUri()
  {
    return $this->uri;
  }
}
