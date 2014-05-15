<?php 
namespace Google\Service\YouTube;
class ChannelSectionSnippet extends \Google\Model
{
  public $channelId;
  public $position;
  public $style;
  public $title;
  public $type;

  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }

  public function getChannelId()
  {
    return $this->channelId;
  }

  public function setPosition($position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }

  public function setStyle($style)
  {
    $this->style = $style;
  }

  public function getStyle()
  {
    return $this->style;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
