<?php 
namespace Google\Service\PlusDomains;
class Media extends \Google\Collection
{
  protected $authorType = 'Google\Service\PlusDomains\MediaAuthor';
  protected $authorDataType = '';
  public $displayName;
  public $etag;
  protected $exifType = 'Google\Service\PlusDomains\MediaExif';
  protected $exifDataType = '';
  public $height;
  public $id;
  public $kind;
  public $mediaCreatedTime;
  public $mediaUrl;
  public $published;
  public $sizeBytes;
  protected $streamsType = 'Google\Service\PlusDomains\Videostream';
  protected $streamsDataType = 'array';
  public $summary;
  public $updated;
  public $url;
  public $videoDuration;
  public $videoStatus;
  public $width;

  public function setAuthor(\Google\Service\PlusDomains\MediaAuthor $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setExif(\Google\Service\PlusDomains\MediaExif $exif)
  {
    $this->exif = $exif;
  }

  public function getExif()
  {
    return $this->exif;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
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

  public function setMediaCreatedTime($mediaCreatedTime)
  {
    $this->mediaCreatedTime = $mediaCreatedTime;
  }

  public function getMediaCreatedTime()
  {
    return $this->mediaCreatedTime;
  }

  public function setMediaUrl($mediaUrl)
  {
    $this->mediaUrl = $mediaUrl;
  }

  public function getMediaUrl()
  {
    return $this->mediaUrl;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }

  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }

  public function setStreams($streams)
  {
    $this->streams = $streams;
  }

  public function getStreams()
  {
    return $this->streams;
  }

  public function setSummary($summary)
  {
    $this->summary = $summary;
  }

  public function getSummary()
  {
    return $this->summary;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setVideoDuration($videoDuration)
  {
    $this->videoDuration = $videoDuration;
  }

  public function getVideoDuration()
  {
    return $this->videoDuration;
  }

  public function setVideoStatus($videoStatus)
  {
    $this->videoStatus = $videoStatus;
  }

  public function getVideoStatus()
  {
    return $this->videoStatus;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }
}
