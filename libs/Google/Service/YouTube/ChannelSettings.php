<?php 
namespace Google\Service\YouTube;
class ChannelSettings extends \Google\Collection
{
  public $defaultTab;
  public $description;
  public $featuredChannelsTitle;
  public $featuredChannelsUrls;
  public $keywords;
  public $moderateComments;
  public $profileColor;
  public $showBrowseView;
  public $showRelatedChannels;
  public $title;
  public $trackingAnalyticsAccountId;
  public $unsubscribedTrailer;

  public function setDefaultTab($defaultTab)
  {
    $this->defaultTab = $defaultTab;
  }

  public function getDefaultTab()
  {
    return $this->defaultTab;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setFeaturedChannelsTitle($featuredChannelsTitle)
  {
    $this->featuredChannelsTitle = $featuredChannelsTitle;
  }

  public function getFeaturedChannelsTitle()
  {
    return $this->featuredChannelsTitle;
  }

  public function setFeaturedChannelsUrls($featuredChannelsUrls)
  {
    $this->featuredChannelsUrls = $featuredChannelsUrls;
  }

  public function getFeaturedChannelsUrls()
  {
    return $this->featuredChannelsUrls;
  }

  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }

  public function getKeywords()
  {
    return $this->keywords;
  }

  public function setModerateComments($moderateComments)
  {
    $this->moderateComments = $moderateComments;
  }

  public function getModerateComments()
  {
    return $this->moderateComments;
  }

  public function setProfileColor($profileColor)
  {
    $this->profileColor = $profileColor;
  }

  public function getProfileColor()
  {
    return $this->profileColor;
  }

  public function setShowBrowseView($showBrowseView)
  {
    $this->showBrowseView = $showBrowseView;
  }

  public function getShowBrowseView()
  {
    return $this->showBrowseView;
  }

  public function setShowRelatedChannels($showRelatedChannels)
  {
    $this->showRelatedChannels = $showRelatedChannels;
  }

  public function getShowRelatedChannels()
  {
    return $this->showRelatedChannels;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTrackingAnalyticsAccountId($trackingAnalyticsAccountId)
  {
    $this->trackingAnalyticsAccountId = $trackingAnalyticsAccountId;
  }

  public function getTrackingAnalyticsAccountId()
  {
    return $this->trackingAnalyticsAccountId;
  }

  public function setUnsubscribedTrailer($unsubscribedTrailer)
  {
    $this->unsubscribedTrailer = $unsubscribedTrailer;
  }

  public function getUnsubscribedTrailer()
  {
    return $this->unsubscribedTrailer;
  }
}
