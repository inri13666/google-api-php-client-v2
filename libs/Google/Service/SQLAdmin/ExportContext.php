<?php 
namespace Google\Service\SQLAdmin;
class ExportContext extends \Google\Collection
{
  public $database;
  public $kind;
  public $table;
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

  public function setTable($table)
  {
    $this->table = $table;
  }

  public function getTable()
  {
    return $this->table;
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
