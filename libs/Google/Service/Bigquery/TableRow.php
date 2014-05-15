<?php 
namespace Google\Service\Bigquery;
class TableRow extends \Google\Collection
{
  protected $fType = 'Google\Service\Bigquery\TableCell';
  protected $fDataType = 'array';

  public function setF($f)
  {
    $this->f = $f;
  }

  public function getF()
  {
    return $this->f;
  }
}
