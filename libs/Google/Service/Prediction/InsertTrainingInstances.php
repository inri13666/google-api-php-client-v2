<?php 
namespace Google\Service\Prediction;
class InsertTrainingInstances extends \Google\Collection
{
  public $csvInstance;
  public $output;

  public function setCsvInstance($csvInstance)
  {
    $this->csvInstance = $csvInstance;
  }

  public function getCsvInstance()
  {
    return $this->csvInstance;
  }

  public function setOutput($output)
  {
    $this->output = $output;
  }

  public function getOutput()
  {
    return $this->output;
  }
}
