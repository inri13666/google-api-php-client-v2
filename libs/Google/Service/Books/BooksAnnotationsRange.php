<?php 
namespace Google\Service\Books;
class BooksAnnotationsRange extends \Google\Model
{
  public $endOffset;
  public $endPosition;
  public $startOffset;
  public $startPosition;

  public function setEndOffset($endOffset)
  {
    $this->endOffset = $endOffset;
  }

  public function getEndOffset()
  {
    return $this->endOffset;
  }

  public function setEndPosition($endPosition)
  {
    $this->endPosition = $endPosition;
  }

  public function getEndPosition()
  {
    return $this->endPosition;
  }

  public function setStartOffset($startOffset)
  {
    $this->startOffset = $startOffset;
  }

  public function getStartOffset()
  {
    return $this->startOffset;
  }

  public function setStartPosition($startPosition)
  {
    $this->startPosition = $startPosition;
  }

  public function getStartPosition()
  {
    return $this->startPosition;
  }
}
