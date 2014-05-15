<?php 
namespace Google\Service\Games;
class AnonymousPlayer extends \Google\Model
{
  public $avatarImageUrl;
  public $displayName;
  public $kind;

  public function setAvatarImageUrl($avatarImageUrl)
  {
    $this->avatarImageUrl = $avatarImageUrl;
  }

  public function getAvatarImageUrl()
  {
    return $this->avatarImageUrl;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
