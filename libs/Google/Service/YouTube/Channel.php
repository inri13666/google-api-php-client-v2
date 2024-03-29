<?php 
namespace Google\Service\YouTube;
class Channel extends \Google\Model
{
  protected $auditDetailsType = 'Google\Service\YouTube\ChannelAuditDetails';
  protected $auditDetailsDataType = '';
  protected $brandingSettingsType = 'Google\Service\YouTube\ChannelBrandingSettings';
  protected $brandingSettingsDataType = '';
  protected $contentDetailsType = 'Google\Service\YouTube\ChannelContentDetails';
  protected $contentDetailsDataType = '';
  protected $contentOwnerDetailsType = 'Google\Service\YouTube\ChannelContentOwnerDetails';
  protected $contentOwnerDetailsDataType = '';
  protected $conversionPingsType = 'Google\Service\YouTube\ChannelConversionPings';
  protected $conversionPingsDataType = '';
  public $etag;
  public $id;
  protected $invideoPromotionType = 'Google\Service\YouTube\InvideoPromotion';
  protected $invideoPromotionDataType = '';
  public $kind;
  protected $snippetType = 'Google\Service\YouTube\ChannelSnippet';
  protected $snippetDataType = '';
  protected $statisticsType = 'Google\Service\YouTube\ChannelStatistics';
  protected $statisticsDataType = '';
  protected $statusType = 'Google\Service\YouTube\ChannelStatus';
  protected $statusDataType = '';
  protected $topicDetailsType = 'Google\Service\YouTube\ChannelTopicDetails';
  protected $topicDetailsDataType = '';

  public function setAuditDetails(\Google\Service\YouTube\ChannelAuditDetails $auditDetails)
  {
    $this->auditDetails = $auditDetails;
  }

  public function getAuditDetails()
  {
    return $this->auditDetails;
  }

  public function setBrandingSettings(\Google\Service\YouTube\ChannelBrandingSettings $brandingSettings)
  {
    $this->brandingSettings = $brandingSettings;
  }

  public function getBrandingSettings()
  {
    return $this->brandingSettings;
  }

  public function setContentDetails(\Google\Service\YouTube\ChannelContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }

  public function getContentDetails()
  {
    return $this->contentDetails;
  }

  public function setContentOwnerDetails(\Google\Service\YouTube\ChannelContentOwnerDetails $contentOwnerDetails)
  {
    $this->contentOwnerDetails = $contentOwnerDetails;
  }

  public function getContentOwnerDetails()
  {
    return $this->contentOwnerDetails;
  }

  public function setConversionPings(\Google\Service\YouTube\ChannelConversionPings $conversionPings)
  {
    $this->conversionPings = $conversionPings;
  }

  public function getConversionPings()
  {
    return $this->conversionPings;
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

  public function setInvideoPromotion(\Google\Service\YouTube\InvideoPromotion $invideoPromotion)
  {
    $this->invideoPromotion = $invideoPromotion;
  }

  public function getInvideoPromotion()
  {
    return $this->invideoPromotion;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSnippet(\Google\Service\YouTube\ChannelSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setStatistics(\Google\Service\YouTube\ChannelStatistics $statistics)
  {
    $this->statistics = $statistics;
  }

  public function getStatistics()
  {
    return $this->statistics;
  }

  public function setStatus(\Google\Service\YouTube\ChannelStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setTopicDetails(\Google\Service\YouTube\ChannelTopicDetails $topicDetails)
  {
    $this->topicDetails = $topicDetails;
  }

  public function getTopicDetails()
  {
    return $this->topicDetails;
  }
}
