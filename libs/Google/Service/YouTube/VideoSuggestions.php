<?php 
namespace Google\Service\YouTube;
class VideoSuggestions extends \Google\Collection
{
  public $editorSuggestions;
  public $processingErrors;
  public $processingHints;
  public $processingWarnings;
  protected $tagSuggestionsType = 'Google\Service\YouTube\VideoSuggestionsTagSuggestion';
  protected $tagSuggestionsDataType = 'array';

  public function setEditorSuggestions($editorSuggestions)
  {
    $this->editorSuggestions = $editorSuggestions;
  }

  public function getEditorSuggestions()
  {
    return $this->editorSuggestions;
  }

  public function setProcessingErrors($processingErrors)
  {
    $this->processingErrors = $processingErrors;
  }

  public function getProcessingErrors()
  {
    return $this->processingErrors;
  }

  public function setProcessingHints($processingHints)
  {
    $this->processingHints = $processingHints;
  }

  public function getProcessingHints()
  {
    return $this->processingHints;
  }

  public function setProcessingWarnings($processingWarnings)
  {
    $this->processingWarnings = $processingWarnings;
  }

  public function getProcessingWarnings()
  {
    return $this->processingWarnings;
  }

  public function setTagSuggestions($tagSuggestions)
  {
    $this->tagSuggestions = $tagSuggestions;
  }

  public function getTagSuggestions()
  {
    return $this->tagSuggestions;
  }
}
