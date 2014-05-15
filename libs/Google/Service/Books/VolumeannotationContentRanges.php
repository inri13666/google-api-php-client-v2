<?php 
namespace Google\Service\Books;
class VolumeannotationContentRanges extends \Google\Model
{
  protected $cfiRangeType = 'Google\Service\Books\BooksAnnotationsRange';
  protected $cfiRangeDataType = '';
  public $contentVersion;
  protected $gbImageRangeType = 'Google\Service\Books\BooksAnnotationsRange';
  protected $gbImageRangeDataType = '';
  protected $gbTextRangeType = 'Google\Service\Books\BooksAnnotationsRange';
  protected $gbTextRangeDataType = '';

  public function setCfiRange(\Google\Service\Books\BooksAnnotationsRange $cfiRange)
  {
    $this->cfiRange = $cfiRange;
  }

  public function getCfiRange()
  {
    return $this->cfiRange;
  }

  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }

  public function getContentVersion()
  {
    return $this->contentVersion;
  }

  public function setGbImageRange(\Google\Service\Books\BooksAnnotationsRange $gbImageRange)
  {
    $this->gbImageRange = $gbImageRange;
  }

  public function getGbImageRange()
  {
    return $this->gbImageRange;
  }

  public function setGbTextRange(\Google\Service\Books\BooksAnnotationsRange $gbTextRange)
  {
    $this->gbTextRange = $gbTextRange;
  }

  public function getGbTextRange()
  {
    return $this->gbTextRange;
  }
}
