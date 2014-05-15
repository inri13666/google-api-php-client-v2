<?php 
namespace Google\Service\Prediction;
class AnalyzeDataDescriptionFeatures extends \Google\Model
{
  protected $categoricalType = 'Google\Service\Prediction\AnalyzeDataDescriptionFeaturesCategorical';
  protected $categoricalDataType = '';
  public $index;
  protected $numericType = 'Google\Service\Prediction\AnalyzeDataDescriptionFeaturesNumeric';
  protected $numericDataType = '';
  protected $textType = 'Google\Service\Prediction\AnalyzeDataDescriptionFeaturesText';
  protected $textDataType = '';

  public function setCategorical(\Google\Service\Prediction\AnalyzeDataDescriptionFeaturesCategorical $categorical)
  {
    $this->categorical = $categorical;
  }

  public function getCategorical()
  {
    return $this->categorical;
  }

  public function setIndex($index)
  {
    $this->index = $index;
  }

  public function getIndex()
  {
    return $this->index;
  }

  public function setNumeric(\Google\Service\Prediction\AnalyzeDataDescriptionFeaturesNumeric $numeric)
  {
    $this->numeric = $numeric;
  }

  public function getNumeric()
  {
    return $this->numeric;
  }

  public function setText(\Google\Service\Prediction\AnalyzeDataDescriptionFeaturesText $text)
  {
    $this->text = $text;
  }

  public function getText()
  {
    return $this->text;
  }
}
