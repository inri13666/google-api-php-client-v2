<?php 
namespace Google\Service\DoubleClickBidManager;
class Report extends \Google\Model
{
  protected $keyType = 'Google\Service\DoubleClickBidManager\ReportKey';
  protected $keyDataType = '';
  protected $metadataType = 'Google\Service\DoubleClickBidManager\ReportMetadata';
  protected $metadataDataType = '';
  protected $paramsType = 'Google\Service\DoubleClickBidManager\Parameters';
  protected $paramsDataType = '';

  public function setKey(\Google\Service\DoubleClickBidManager\ReportKey $key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setMetadata(\Google\Service\DoubleClickBidManager\ReportMetadata $metadata)
  {
    $this->metadata = $metadata;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setParams(\Google\Service\DoubleClickBidManager\Parameters $params)
  {
    $this->params = $params;
  }

  public function getParams()
  {
    return $this->params;
  }
}
