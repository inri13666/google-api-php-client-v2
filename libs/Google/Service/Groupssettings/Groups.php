<?php 
namespace Google\Service\Groupssettings;
class Groups extends \Google\Model
{
  public $allowExternalMembers;
  public $allowGoogleCommunication;
  public $allowWebPosting;
  public $archiveOnly;
  public $customReplyTo;
  public $defaultMessageDenyNotificationText;
  public $description;
  public $email;
  public $includeInGlobalAddressList;
  public $isArchived;
  public $kind;
  public $maxMessageBytes;
  public $membersCanPostAsTheGroup;
  public $messageDisplayFont;
  public $messageModerationLevel;
  public $name;
  public $primaryLanguage;
  public $replyTo;
  public $sendMessageDenyNotification;
  public $showInGroupDirectory;
  public $spamModerationLevel;
  public $whoCanContactOwner;
  public $whoCanInvite;
  public $whoCanJoin;
  public $whoCanLeaveGroup;
  public $whoCanPostMessage;
  public $whoCanViewGroup;
  public $whoCanViewMembership;

  public function setAllowExternalMembers($allowExternalMembers)
  {
    $this->allowExternalMembers = $allowExternalMembers;
  }

  public function getAllowExternalMembers()
  {
    return $this->allowExternalMembers;
  }

  public function setAllowGoogleCommunication($allowGoogleCommunication)
  {
    $this->allowGoogleCommunication = $allowGoogleCommunication;
  }

  public function getAllowGoogleCommunication()
  {
    return $this->allowGoogleCommunication;
  }

  public function setAllowWebPosting($allowWebPosting)
  {
    $this->allowWebPosting = $allowWebPosting;
  }

  public function getAllowWebPosting()
  {
    return $this->allowWebPosting;
  }

  public function setArchiveOnly($archiveOnly)
  {
    $this->archiveOnly = $archiveOnly;
  }

  public function getArchiveOnly()
  {
    return $this->archiveOnly;
  }

  public function setCustomReplyTo($customReplyTo)
  {
    $this->customReplyTo = $customReplyTo;
  }

  public function getCustomReplyTo()
  {
    return $this->customReplyTo;
  }

  public function setDefaultMessageDenyNotificationText($defaultMessageDenyNotificationText)
  {
    $this->defaultMessageDenyNotificationText = $defaultMessageDenyNotificationText;
  }

  public function getDefaultMessageDenyNotificationText()
  {
    return $this->defaultMessageDenyNotificationText;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setIncludeInGlobalAddressList($includeInGlobalAddressList)
  {
    $this->includeInGlobalAddressList = $includeInGlobalAddressList;
  }

  public function getIncludeInGlobalAddressList()
  {
    return $this->includeInGlobalAddressList;
  }

  public function setIsArchived($isArchived)
  {
    $this->isArchived = $isArchived;
  }

  public function getIsArchived()
  {
    return $this->isArchived;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxMessageBytes($maxMessageBytes)
  {
    $this->maxMessageBytes = $maxMessageBytes;
  }

  public function getMaxMessageBytes()
  {
    return $this->maxMessageBytes;
  }

  public function setMembersCanPostAsTheGroup($membersCanPostAsTheGroup)
  {
    $this->membersCanPostAsTheGroup = $membersCanPostAsTheGroup;
  }

  public function getMembersCanPostAsTheGroup()
  {
    return $this->membersCanPostAsTheGroup;
  }

  public function setMessageDisplayFont($messageDisplayFont)
  {
    $this->messageDisplayFont = $messageDisplayFont;
  }

  public function getMessageDisplayFont()
  {
    return $this->messageDisplayFont;
  }

  public function setMessageModerationLevel($messageModerationLevel)
  {
    $this->messageModerationLevel = $messageModerationLevel;
  }

  public function getMessageModerationLevel()
  {
    return $this->messageModerationLevel;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPrimaryLanguage($primaryLanguage)
  {
    $this->primaryLanguage = $primaryLanguage;
  }

  public function getPrimaryLanguage()
  {
    return $this->primaryLanguage;
  }

  public function setReplyTo($replyTo)
  {
    $this->replyTo = $replyTo;
  }

  public function getReplyTo()
  {
    return $this->replyTo;
  }

  public function setSendMessageDenyNotification($sendMessageDenyNotification)
  {
    $this->sendMessageDenyNotification = $sendMessageDenyNotification;
  }

  public function getSendMessageDenyNotification()
  {
    return $this->sendMessageDenyNotification;
  }

  public function setShowInGroupDirectory($showInGroupDirectory)
  {
    $this->showInGroupDirectory = $showInGroupDirectory;
  }

  public function getShowInGroupDirectory()
  {
    return $this->showInGroupDirectory;
  }

  public function setSpamModerationLevel($spamModerationLevel)
  {
    $this->spamModerationLevel = $spamModerationLevel;
  }

  public function getSpamModerationLevel()
  {
    return $this->spamModerationLevel;
  }

  public function setWhoCanContactOwner($whoCanContactOwner)
  {
    $this->whoCanContactOwner = $whoCanContactOwner;
  }

  public function getWhoCanContactOwner()
  {
    return $this->whoCanContactOwner;
  }

  public function setWhoCanInvite($whoCanInvite)
  {
    $this->whoCanInvite = $whoCanInvite;
  }

  public function getWhoCanInvite()
  {
    return $this->whoCanInvite;
  }

  public function setWhoCanJoin($whoCanJoin)
  {
    $this->whoCanJoin = $whoCanJoin;
  }

  public function getWhoCanJoin()
  {
    return $this->whoCanJoin;
  }

  public function setWhoCanLeaveGroup($whoCanLeaveGroup)
  {
    $this->whoCanLeaveGroup = $whoCanLeaveGroup;
  }

  public function getWhoCanLeaveGroup()
  {
    return $this->whoCanLeaveGroup;
  }

  public function setWhoCanPostMessage($whoCanPostMessage)
  {
    $this->whoCanPostMessage = $whoCanPostMessage;
  }

  public function getWhoCanPostMessage()
  {
    return $this->whoCanPostMessage;
  }

  public function setWhoCanViewGroup($whoCanViewGroup)
  {
    $this->whoCanViewGroup = $whoCanViewGroup;
  }

  public function getWhoCanViewGroup()
  {
    return $this->whoCanViewGroup;
  }

  public function setWhoCanViewMembership($whoCanViewMembership)
  {
    $this->whoCanViewMembership = $whoCanViewMembership;
  }

  public function getWhoCanViewMembership()
  {
    return $this->whoCanViewMembership;
  }
}
