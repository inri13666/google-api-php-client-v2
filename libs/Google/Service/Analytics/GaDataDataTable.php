<?php 
namespace Google\Service\Analytics;
class GaDataDataTable extends \Google\Collection
{
  protected $colsType = 'Google\Service\Analytics\GaDataDataTableCols';
  protected $colsDataType = 'array';
  protected $rowsType = 'Google\Service\Analytics\GaDataDataTableRows';
  protected $rowsDataType = 'array';

  public function setCols($cols)
  {
    $this->cols = $cols;
  }

  public function getCols()
  {
    return $this->cols;
  }

  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  public function getRows()
  {
    return $this->rows;
  }
}
