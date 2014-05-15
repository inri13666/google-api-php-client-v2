<?php 
namespace Google\Service\Drive;
class DriveFileIndexableText extends \Google\Model
{
  public $text;

  public function setText($text)
  {
    $this->text = $text;
  }

  public function getText()
  {
    return $this->text;
  }
}
