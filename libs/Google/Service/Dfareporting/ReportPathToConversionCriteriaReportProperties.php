<?php 
namespace Google\Service\Dfareporting;
class ReportPathToConversionCriteriaReportProperties extends \Google\Model
{
  public $clicksLookbackWindow;
  public $impressionsLookbackWindow;
  public $includeAttributedIPConversions;
  public $includeUnattributedCookieConversions;
  public $includeUnattributedIPConversions;
  public $maximumClickInteractions;
  public $maximumImpressionInteractions;
  public $maximumInteractionGap;
  public $pivotOnInteractionPath;

  public function setClicksLookbackWindow($clicksLookbackWindow)
  {
    $this->clicksLookbackWindow = $clicksLookbackWindow;
  }

  public function getClicksLookbackWindow()
  {
    return $this->clicksLookbackWindow;
  }

  public function setImpressionsLookbackWindow($impressionsLookbackWindow)
  {
    $this->impressionsLookbackWindow = $impressionsLookbackWindow;
  }

  public function getImpressionsLookbackWindow()
  {
    return $this->impressionsLookbackWindow;
  }

  public function setIncludeAttributedIPConversions($includeAttributedIPConversions)
  {
    $this->includeAttributedIPConversions = $includeAttributedIPConversions;
  }

  public function getIncludeAttributedIPConversions()
  {
    return $this->includeAttributedIPConversions;
  }

  public function setIncludeUnattributedCookieConversions($includeUnattributedCookieConversions)
  {
    $this->includeUnattributedCookieConversions = $includeUnattributedCookieConversions;
  }

  public function getIncludeUnattributedCookieConversions()
  {
    return $this->includeUnattributedCookieConversions;
  }

  public function setIncludeUnattributedIPConversions($includeUnattributedIPConversions)
  {
    $this->includeUnattributedIPConversions = $includeUnattributedIPConversions;
  }

  public function getIncludeUnattributedIPConversions()
  {
    return $this->includeUnattributedIPConversions;
  }

  public function setMaximumClickInteractions($maximumClickInteractions)
  {
    $this->maximumClickInteractions = $maximumClickInteractions;
  }

  public function getMaximumClickInteractions()
  {
    return $this->maximumClickInteractions;
  }

  public function setMaximumImpressionInteractions($maximumImpressionInteractions)
  {
    $this->maximumImpressionInteractions = $maximumImpressionInteractions;
  }

  public function getMaximumImpressionInteractions()
  {
    return $this->maximumImpressionInteractions;
  }

  public function setMaximumInteractionGap($maximumInteractionGap)
  {
    $this->maximumInteractionGap = $maximumInteractionGap;
  }

  public function getMaximumInteractionGap()
  {
    return $this->maximumInteractionGap;
  }

  public function setPivotOnInteractionPath($pivotOnInteractionPath)
  {
    $this->pivotOnInteractionPath = $pivotOnInteractionPath;
  }

  public function getPivotOnInteractionPath()
  {
    return $this->pivotOnInteractionPath;
  }
}
