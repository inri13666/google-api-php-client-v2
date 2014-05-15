<?php 
namespace Google\Service\Prediction;
class AnalyzeModelDescription extends \Google\Model
{
  public $confusionMatrix;
  public $confusionMatrixRowTotals;
  protected $modelinfoType = 'Google\Service\Prediction\Insert2';
  protected $modelinfoDataType = '';

  public function setConfusionMatrix($confusionMatrix)
  {
    $this->confusionMatrix = $confusionMatrix;
  }

  public function getConfusionMatrix()
  {
    return $this->confusionMatrix;
  }

  public function setConfusionMatrixRowTotals($confusionMatrixRowTotals)
  {
    $this->confusionMatrixRowTotals = $confusionMatrixRowTotals;
  }

  public function getConfusionMatrixRowTotals()
  {
    return $this->confusionMatrixRowTotals;
  }

  public function setModelinfo(\Google\Service\Prediction\Insert2 $modelinfo)
  {
    $this->modelinfo = $modelinfo;
  }

  public function getModelinfo()
  {
    return $this->modelinfo;
  }
}
