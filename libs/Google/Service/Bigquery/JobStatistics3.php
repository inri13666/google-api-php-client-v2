<?php 
namespace Google\Service\Bigquery;
class JobStatistics3 extends \Google\Model
{
  public $inputFileBytes;
  public $inputFiles;
  public $outputBytes;
  public $outputRows;

  public function setInputFileBytes($inputFileBytes)
  {
    $this->inputFileBytes = $inputFileBytes;
  }

  public function getInputFileBytes()
  {
    return $this->inputFileBytes;
  }

  public function setInputFiles($inputFiles)
  {
    $this->inputFiles = $inputFiles;
  }

  public function getInputFiles()
  {
    return $this->inputFiles;
  }

  public function setOutputBytes($outputBytes)
  {
    $this->outputBytes = $outputBytes;
  }

  public function getOutputBytes()
  {
    return $this->outputBytes;
  }

  public function setOutputRows($outputRows)
  {
    $this->outputRows = $outputRows;
  }

  public function getOutputRows()
  {
    return $this->outputRows;
  }
}
