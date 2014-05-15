<?php 
namespace Google\Service\Reports;
class UsageReportParameters extends \Google\Collection
{
  public $boolValue;
  public $datetimeValue;
  public $intValue;
  public $msgValue;
  public $name;
  public $stringValue;

  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }

  public function getBoolValue()
  {
    return $this->boolValue;
  }

  public function setDatetimeValue($datetimeValue)
  {
    $this->datetimeValue = $datetimeValue;
  }

  public function getDatetimeValue()
  {
    return $this->datetimeValue;
  }

  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }

  public function getIntValue()
  {
    return $this->intValue;
  }

  public function setMsgValue($msgValue)
  {
    $this->msgValue = $msgValue;
  }

  public function getMsgValue()
  {
    return $this->msgValue;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }

  public function getStringValue()
  {
    return $this->stringValue;
  }
}
