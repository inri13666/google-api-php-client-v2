<?php 
namespace Google\Service\YouTube;
class VideoFileDetails extends \Google\Collection
{
  protected $audioStreamsType = 'Google\Service\YouTube\VideoFileDetailsAudioStream';
  protected $audioStreamsDataType = 'array';
  public $bitrateBps;
  public $container;
  public $creationTime;
  public $durationMs;
  public $fileName;
  public $fileSize;
  public $fileType;
  protected $recordingLocationType = 'Google\Service\YouTube\GeoPoint';
  protected $recordingLocationDataType = '';
  protected $videoStreamsType = 'Google\Service\YouTube\VideoFileDetailsVideoStream';
  protected $videoStreamsDataType = 'array';

  public function setAudioStreams($audioStreams)
  {
    $this->audioStreams = $audioStreams;
  }

  public function getAudioStreams()
  {
    return $this->audioStreams;
  }

  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }

  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }

  public function setContainer($container)
  {
    $this->container = $container;
  }

  public function getContainer()
  {
    return $this->container;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }

  public function getDurationMs()
  {
    return $this->durationMs;
  }

  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }

  public function getFileName()
  {
    return $this->fileName;
  }

  public function setFileSize($fileSize)
  {
    $this->fileSize = $fileSize;
  }

  public function getFileSize()
  {
    return $this->fileSize;
  }

  public function setFileType($fileType)
  {
    $this->fileType = $fileType;
  }

  public function getFileType()
  {
    return $this->fileType;
  }

  public function setRecordingLocation(\Google\Service\YouTube\GeoPoint $recordingLocation)
  {
    $this->recordingLocation = $recordingLocation;
  }

  public function getRecordingLocation()
  {
    return $this->recordingLocation;
  }

  public function setVideoStreams($videoStreams)
  {
    $this->videoStreams = $videoStreams;
  }

  public function getVideoStreams()
  {
    return $this->videoStreams;
  }
}
