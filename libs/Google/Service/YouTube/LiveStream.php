<?php 
namespace Google\Service\YouTube;
class LiveStream extends \Google\Model
{
  protected $cdnType = 'Google\Service\YouTube\CdnSettings';
  protected $cdnDataType = '';
  protected $contentDetailsType = 'Google\Service\YouTube\LiveStreamContentDetails';
  protected $contentDetailsDataType = '';
  public $etag;
  public $id;
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\LiveStreamSnippet';
  protected $snippetDataType = '';
  protected $statusType = 'Google\Service\YouTube\LiveStreamStatus';
  protected $statusDataType = '';

  public function setCdn(\Google\Service\YouTube\CdnSettings $cdn)
  {
    $this->cdn = $cdn;
  }

  public function getCdn()
  {
    return $this->cdn;
  }

  public function setContentDetails(\Google\Service\YouTube\LiveStreamContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }

  public function getContentDetails()
  {
    return $this->contentDetails;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSnippet(\Google\Service\YouTube\LiveStreamSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setStatus(\Google\Service\YouTube\LiveStreamStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
