<?php 
namespace Google\Service\Analytics;
class DailyUpload extends \Google\Collection
{
  public $accountId;
  public $appendCount;
  public $createdTime;
  public $customDataSourceId;
  public $date;
  public $kind;
  public $modifiedTime;
  protected $parentLinkType = 'Google\Service\Analytics\DailyUploadParentLink';
  protected $parentLinkDataType = '';
  protected $recentChangesType = 'Google\Service\Analytics\DailyUploadRecentChanges';
  protected $recentChangesDataType = 'array';
  public $selfLink;
  public $webPropertyId;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAppendCount($appendCount)
  {
    $this->appendCount = $appendCount;
  }

  public function getAppendCount()
  {
    return $this->appendCount;
  }

  public function setCreatedTime($createdTime)
  {
    $this->createdTime = $createdTime;
  }

  public function getCreatedTime()
  {
    return $this->createdTime;
  }

  public function setCustomDataSourceId($customDataSourceId)
  {
    $this->customDataSourceId = $customDataSourceId;
  }

  public function getCustomDataSourceId()
  {
    return $this->customDataSourceId;
  }

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setModifiedTime($modifiedTime)
  {
    $this->modifiedTime = $modifiedTime;
  }

  public function getModifiedTime()
  {
    return $this->modifiedTime;
  }

  public function setParentLink(\Google\Service\Analytics\DailyUploadParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }

  public function getParentLink()
  {
    return $this->parentLink;
  }

  public function setRecentChanges($recentChanges)
  {
    $this->recentChanges = $recentChanges;
  }

  public function getRecentChanges()
  {
    return $this->recentChanges;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }

  public function getWebPropertyId()
  {
    return $this->webPropertyId;
  }
}
