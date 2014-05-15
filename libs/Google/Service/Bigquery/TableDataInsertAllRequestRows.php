<?php 
namespace Google\Service\Bigquery;
class TableDataInsertAllRequestRows extends \Google\Model
{
  public $insertId;
  public $json;

  public function setInsertId($insertId)
  {
    $this->insertId = $insertId;
  }

  public function getInsertId()
  {
    return $this->insertId;
  }

  public function setJson($json)
  {
    $this->json = $json;
  }

  public function getJson()
  {
    return $this->json;
  }
}
