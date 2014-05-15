<?php 
namespace Google\Service\Urlshortener;
class Url extends \Google\Model
{
  protected $analyticsType = 'Google\Service\Urlshortener\AnalyticsSummary';
  protected $analyticsDataType = '';
  public $created;
  public $id;
  public $kind;
  public $longUrl;
  public $status;

  public function setAnalytics(\Google\Service\Urlshortener\AnalyticsSummary $analytics)
  {
    $this->analytics = $analytics;
  }

  public function getAnalytics()
  {
    return $this->analytics;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
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

  public function setLongUrl($longUrl)
  {
    $this->longUrl = $longUrl;
  }

  public function getLongUrl()
  {
    return $this->longUrl;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
