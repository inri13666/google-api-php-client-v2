<?php 
namespace Google\Service\Bigquery;
class TableReference extends \Google\Model
{
  public $datasetId;
  public $projectId;
  public $tableId;

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }

  public function getDatasetId()
  {
    return $this->datasetId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }

  public function getTableId()
  {
    return $this->tableId;
  }
}
