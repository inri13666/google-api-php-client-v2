<?php 
namespace Google\Service\Dfareporting;
class DfareportingFileUrls extends \Google\Model
{
  public $apiUrl;
  public $browserUrl;

  public function setApiUrl($apiUrl)
  {
    $this->apiUrl = $apiUrl;
  }

  public function getApiUrl()
  {
    return $this->apiUrl;
  }

  public function setBrowserUrl($browserUrl)
  {
    $this->browserUrl = $browserUrl;
  }

  public function getBrowserUrl()
  {
    return $this->browserUrl;
  }
}
