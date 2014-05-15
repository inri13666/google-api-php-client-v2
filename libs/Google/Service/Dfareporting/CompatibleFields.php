<?php 
namespace Google\Service\Dfareporting;
class CompatibleFields extends \Google\Model
{
  protected $crossDimensionReachReportCompatibleFieldsType = 'Google\Service\Dfareporting\CrossDimensionReachReportCompatibleFields';
  protected $crossDimensionReachReportCompatibleFieldsDataType = '';
  protected $floodlightReportCompatibleFieldsType = 'Google\Service\Dfareporting\FloodlightReportCompatibleFields';
  protected $floodlightReportCompatibleFieldsDataType = '';
  public $kind;
  protected $pathToConversionReportCompatibleFieldsType = 'Google\Service\Dfareporting\PathToConversionReportCompatibleFields';
  protected $pathToConversionReportCompatibleFieldsDataType = '';
  protected $reachReportCompatibleFieldsType = 'Google\Service\Dfareporting\ReachReportCompatibleFields';
  protected $reachReportCompatibleFieldsDataType = '';
  protected $reportCompatibleFieldsType = 'Google\Service\Dfareporting\ReportCompatibleFields';
  protected $reportCompatibleFieldsDataType = '';

  public function setCrossDimensionReachReportCompatibleFields(\Google\Service\Dfareporting\CrossDimensionReachReportCompatibleFields $crossDimensionReachReportCompatibleFields)
  {
    $this->crossDimensionReachReportCompatibleFields = $crossDimensionReachReportCompatibleFields;
  }

  public function getCrossDimensionReachReportCompatibleFields()
  {
    return $this->crossDimensionReachReportCompatibleFields;
  }

  public function setFloodlightReportCompatibleFields(\Google\Service\Dfareporting\FloodlightReportCompatibleFields $floodlightReportCompatibleFields)
  {
    $this->floodlightReportCompatibleFields = $floodlightReportCompatibleFields;
  }

  public function getFloodlightReportCompatibleFields()
  {
    return $this->floodlightReportCompatibleFields;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPathToConversionReportCompatibleFields(\Google\Service\Dfareporting\PathToConversionReportCompatibleFields $pathToConversionReportCompatibleFields)
  {
    $this->pathToConversionReportCompatibleFields = $pathToConversionReportCompatibleFields;
  }

  public function getPathToConversionReportCompatibleFields()
  {
    return $this->pathToConversionReportCompatibleFields;
  }

  public function setReachReportCompatibleFields(\Google\Service\Dfareporting\ReachReportCompatibleFields $reachReportCompatibleFields)
  {
    $this->reachReportCompatibleFields = $reachReportCompatibleFields;
  }

  public function getReachReportCompatibleFields()
  {
    return $this->reachReportCompatibleFields;
  }

  public function setReportCompatibleFields(\Google\Service\Dfareporting\ReportCompatibleFields $reportCompatibleFields)
  {
    $this->reportCompatibleFields = $reportCompatibleFields;
  }

  public function getReportCompatibleFields()
  {
    return $this->reportCompatibleFields;
  }
}
