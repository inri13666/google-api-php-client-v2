<?php 
namespace Google\Service\YouTube;
class ImageSettings extends \Google\Model
{
  protected $backgroundImageUrlType = 'Google\Service\YouTube\LocalizedProperty';
  protected $backgroundImageUrlDataType = '';
  public $bannerExternalUrl;
  public $bannerImageUrl;
  public $bannerMobileExtraHdImageUrl;
  public $bannerMobileHdImageUrl;
  public $bannerMobileImageUrl;
  public $bannerMobileLowImageUrl;
  public $bannerMobileMediumHdImageUrl;
  public $bannerTabletExtraHdImageUrl;
  public $bannerTabletHdImageUrl;
  public $bannerTabletImageUrl;
  public $bannerTabletLowImageUrl;
  public $bannerTvHighImageUrl;
  public $bannerTvImageUrl;
  public $bannerTvLowImageUrl;
  public $bannerTvMediumImageUrl;
  protected $largeBrandedBannerImageImapScriptType = 'Google\Service\YouTube\LocalizedProperty';
  protected $largeBrandedBannerImageImapScriptDataType = '';
  protected $largeBrandedBannerImageUrlType = 'Google\Service\YouTube\LocalizedProperty';
  protected $largeBrandedBannerImageUrlDataType = '';
  protected $smallBrandedBannerImageImapScriptType = 'Google\Service\YouTube\LocalizedProperty';
  protected $smallBrandedBannerImageImapScriptDataType = '';
  protected $smallBrandedBannerImageUrlType = 'Google\Service\YouTube\LocalizedProperty';
  protected $smallBrandedBannerImageUrlDataType = '';
  public $trackingImageUrl;
  public $watchIconImageUrl;

  public function setBackgroundImageUrl(\Google\Service\YouTube\LocalizedProperty $backgroundImageUrl)
  {
    $this->backgroundImageUrl = $backgroundImageUrl;
  }

  public function getBackgroundImageUrl()
  {
    return $this->backgroundImageUrl;
  }

  public function setBannerExternalUrl($bannerExternalUrl)
  {
    $this->bannerExternalUrl = $bannerExternalUrl;
  }

  public function getBannerExternalUrl()
  {
    return $this->bannerExternalUrl;
  }

  public function setBannerImageUrl($bannerImageUrl)
  {
    $this->bannerImageUrl = $bannerImageUrl;
  }

  public function getBannerImageUrl()
  {
    return $this->bannerImageUrl;
  }

  public function setBannerMobileExtraHdImageUrl($bannerMobileExtraHdImageUrl)
  {
    $this->bannerMobileExtraHdImageUrl = $bannerMobileExtraHdImageUrl;
  }

  public function getBannerMobileExtraHdImageUrl()
  {
    return $this->bannerMobileExtraHdImageUrl;
  }

  public function setBannerMobileHdImageUrl($bannerMobileHdImageUrl)
  {
    $this->bannerMobileHdImageUrl = $bannerMobileHdImageUrl;
  }

  public function getBannerMobileHdImageUrl()
  {
    return $this->bannerMobileHdImageUrl;
  }

  public function setBannerMobileImageUrl($bannerMobileImageUrl)
  {
    $this->bannerMobileImageUrl = $bannerMobileImageUrl;
  }

  public function getBannerMobileImageUrl()
  {
    return $this->bannerMobileImageUrl;
  }

  public function setBannerMobileLowImageUrl($bannerMobileLowImageUrl)
  {
    $this->bannerMobileLowImageUrl = $bannerMobileLowImageUrl;
  }

  public function getBannerMobileLowImageUrl()
  {
    return $this->bannerMobileLowImageUrl;
  }

  public function setBannerMobileMediumHdImageUrl($bannerMobileMediumHdImageUrl)
  {
    $this->bannerMobileMediumHdImageUrl = $bannerMobileMediumHdImageUrl;
  }

  public function getBannerMobileMediumHdImageUrl()
  {
    return $this->bannerMobileMediumHdImageUrl;
  }

  public function setBannerTabletExtraHdImageUrl($bannerTabletExtraHdImageUrl)
  {
    $this->bannerTabletExtraHdImageUrl = $bannerTabletExtraHdImageUrl;
  }

  public function getBannerTabletExtraHdImageUrl()
  {
    return $this->bannerTabletExtraHdImageUrl;
  }

  public function setBannerTabletHdImageUrl($bannerTabletHdImageUrl)
  {
    $this->bannerTabletHdImageUrl = $bannerTabletHdImageUrl;
  }

  public function getBannerTabletHdImageUrl()
  {
    return $this->bannerTabletHdImageUrl;
  }

  public function setBannerTabletImageUrl($bannerTabletImageUrl)
  {
    $this->bannerTabletImageUrl = $bannerTabletImageUrl;
  }

  public function getBannerTabletImageUrl()
  {
    return $this->bannerTabletImageUrl;
  }

  public function setBannerTabletLowImageUrl($bannerTabletLowImageUrl)
  {
    $this->bannerTabletLowImageUrl = $bannerTabletLowImageUrl;
  }

  public function getBannerTabletLowImageUrl()
  {
    return $this->bannerTabletLowImageUrl;
  }

  public function setBannerTvHighImageUrl($bannerTvHighImageUrl)
  {
    $this->bannerTvHighImageUrl = $bannerTvHighImageUrl;
  }

  public function getBannerTvHighImageUrl()
  {
    return $this->bannerTvHighImageUrl;
  }

  public function setBannerTvImageUrl($bannerTvImageUrl)
  {
    $this->bannerTvImageUrl = $bannerTvImageUrl;
  }

  public function getBannerTvImageUrl()
  {
    return $this->bannerTvImageUrl;
  }

  public function setBannerTvLowImageUrl($bannerTvLowImageUrl)
  {
    $this->bannerTvLowImageUrl = $bannerTvLowImageUrl;
  }

  public function getBannerTvLowImageUrl()
  {
    return $this->bannerTvLowImageUrl;
  }

  public function setBannerTvMediumImageUrl($bannerTvMediumImageUrl)
  {
    $this->bannerTvMediumImageUrl = $bannerTvMediumImageUrl;
  }

  public function getBannerTvMediumImageUrl()
  {
    return $this->bannerTvMediumImageUrl;
  }

  public function setLargeBrandedBannerImageImapScript(\Google\Service\YouTube\LocalizedProperty $largeBrandedBannerImageImapScript)
  {
    $this->largeBrandedBannerImageImapScript = $largeBrandedBannerImageImapScript;
  }

  public function getLargeBrandedBannerImageImapScript()
  {
    return $this->largeBrandedBannerImageImapScript;
  }

  public function setLargeBrandedBannerImageUrl(\Google\Service\YouTube\LocalizedProperty $largeBrandedBannerImageUrl)
  {
    $this->largeBrandedBannerImageUrl = $largeBrandedBannerImageUrl;
  }

  public function getLargeBrandedBannerImageUrl()
  {
    return $this->largeBrandedBannerImageUrl;
  }

  public function setSmallBrandedBannerImageImapScript(\Google\Service\YouTube\LocalizedProperty $smallBrandedBannerImageImapScript)
  {
    $this->smallBrandedBannerImageImapScript = $smallBrandedBannerImageImapScript;
  }

  public function getSmallBrandedBannerImageImapScript()
  {
    return $this->smallBrandedBannerImageImapScript;
  }

  public function setSmallBrandedBannerImageUrl(\Google\Service\YouTube\LocalizedProperty $smallBrandedBannerImageUrl)
  {
    $this->smallBrandedBannerImageUrl = $smallBrandedBannerImageUrl;
  }

  public function getSmallBrandedBannerImageUrl()
  {
    return $this->smallBrandedBannerImageUrl;
  }

  public function setTrackingImageUrl($trackingImageUrl)
  {
    $this->trackingImageUrl = $trackingImageUrl;
  }

  public function getTrackingImageUrl()
  {
    return $this->trackingImageUrl;
  }

  public function setWatchIconImageUrl($watchIconImageUrl)
  {
    $this->watchIconImageUrl = $watchIconImageUrl;
  }

  public function getWatchIconImageUrl()
  {
    return $this->watchIconImageUrl;
  }
}
