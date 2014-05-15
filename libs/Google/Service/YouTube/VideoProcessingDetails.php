<?php 
namespace Google\Service\YouTube;
class VideoProcessingDetails extends \Google\Model
{
  public $editorSuggestionsAvailability;
  public $fileDetailsAvailability;
  public $processingFailureReason;
  public $processingIssuesAvailability;
  protected $processingProgressType = 'Google\Service\YouTube\VideoProcessingDetailsProcessingProgress';
  protected $processingProgressDataType = '';
  public $processingStatus;
  public $tagSuggestionsAvailability;
  public $thumbnailsAvailability;

  public function setEditorSuggestionsAvailability($editorSuggestionsAvailability)
  {
    $this->editorSuggestionsAvailability = $editorSuggestionsAvailability;
  }

  public function getEditorSuggestionsAvailability()
  {
    return $this->editorSuggestionsAvailability;
  }

  public function setFileDetailsAvailability($fileDetailsAvailability)
  {
    $this->fileDetailsAvailability = $fileDetailsAvailability;
  }

  public function getFileDetailsAvailability()
  {
    return $this->fileDetailsAvailability;
  }

  public function setProcessingFailureReason($processingFailureReason)
  {
    $this->processingFailureReason = $processingFailureReason;
  }

  public function getProcessingFailureReason()
  {
    return $this->processingFailureReason;
  }

  public function setProcessingIssuesAvailability($processingIssuesAvailability)
  {
    $this->processingIssuesAvailability = $processingIssuesAvailability;
  }

  public function getProcessingIssuesAvailability()
  {
    return $this->processingIssuesAvailability;
  }

  public function setProcessingProgress(\Google\Service\YouTube\VideoProcessingDetailsProcessingProgress $processingProgress)
  {
    $this->processingProgress = $processingProgress;
  }

  public function getProcessingProgress()
  {
    return $this->processingProgress;
  }

  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }

  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }

  public function setTagSuggestionsAvailability($tagSuggestionsAvailability)
  {
    $this->tagSuggestionsAvailability = $tagSuggestionsAvailability;
  }

  public function getTagSuggestionsAvailability()
  {
    return $this->tagSuggestionsAvailability;
  }

  public function setThumbnailsAvailability($thumbnailsAvailability)
  {
    $this->thumbnailsAvailability = $thumbnailsAvailability;
  }

  public function getThumbnailsAvailability()
  {
    return $this->thumbnailsAvailability;
  }
}
