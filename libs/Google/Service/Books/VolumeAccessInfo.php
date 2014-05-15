<?php 
namespace Google\Service\Books;
class VolumeAccessInfo extends \Google\Model
{
  public $accessViewStatus;
  public $country;
  protected $downloadAccessType = 'Google\Service\Books\DownloadAccessRestriction';
  protected $downloadAccessDataType = '';
  public $driveImportedContentLink;
  public $embeddable;
  protected $epubType = 'Google\Service\Books\VolumeAccessInfoEpub';
  protected $epubDataType = '';
  public $explicitOfflineLicenseManagement;
  protected $pdfType = 'Google\Service\Books\VolumeAccessInfoPdf';
  protected $pdfDataType = '';
  public $publicDomain;
  public $quoteSharingAllowed;
  public $textToSpeechPermission;
  public $viewOrderUrl;
  public $viewability;
  public $webReaderLink;

  public function setAccessViewStatus($accessViewStatus)
  {
    $this->accessViewStatus = $accessViewStatus;
  }

  public function getAccessViewStatus()
  {
    return $this->accessViewStatus;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function setDownloadAccess(\Google\Service\Books\DownloadAccessRestriction $downloadAccess)
  {
    $this->downloadAccess = $downloadAccess;
  }

  public function getDownloadAccess()
  {
    return $this->downloadAccess;
  }

  public function setDriveImportedContentLink($driveImportedContentLink)
  {
    $this->driveImportedContentLink = $driveImportedContentLink;
  }

  public function getDriveImportedContentLink()
  {
    return $this->driveImportedContentLink;
  }

  public function setEmbeddable($embeddable)
  {
    $this->embeddable = $embeddable;
  }

  public function getEmbeddable()
  {
    return $this->embeddable;
  }

  public function setEpub(\Google\Service\Books\VolumeAccessInfoEpub $epub)
  {
    $this->epub = $epub;
  }

  public function getEpub()
  {
    return $this->epub;
  }

  public function setExplicitOfflineLicenseManagement($explicitOfflineLicenseManagement)
  {
    $this->explicitOfflineLicenseManagement = $explicitOfflineLicenseManagement;
  }

  public function getExplicitOfflineLicenseManagement()
  {
    return $this->explicitOfflineLicenseManagement;
  }

  public function setPdf(\Google\Service\Books\VolumeAccessInfoPdf $pdf)
  {
    $this->pdf = $pdf;
  }

  public function getPdf()
  {
    return $this->pdf;
  }

  public function setPublicDomain($publicDomain)
  {
    $this->publicDomain = $publicDomain;
  }

  public function getPublicDomain()
  {
    return $this->publicDomain;
  }

  public function setQuoteSharingAllowed($quoteSharingAllowed)
  {
    $this->quoteSharingAllowed = $quoteSharingAllowed;
  }

  public function getQuoteSharingAllowed()
  {
    return $this->quoteSharingAllowed;
  }

  public function setTextToSpeechPermission($textToSpeechPermission)
  {
    $this->textToSpeechPermission = $textToSpeechPermission;
  }

  public function getTextToSpeechPermission()
  {
    return $this->textToSpeechPermission;
  }

  public function setViewOrderUrl($viewOrderUrl)
  {
    $this->viewOrderUrl = $viewOrderUrl;
  }

  public function getViewOrderUrl()
  {
    return $this->viewOrderUrl;
  }

  public function setViewability($viewability)
  {
    $this->viewability = $viewability;
  }

  public function getViewability()
  {
    return $this->viewability;
  }

  public function setWebReaderLink($webReaderLink)
  {
    $this->webReaderLink = $webReaderLink;
  }

  public function getWebReaderLink()
  {
    return $this->webReaderLink;
  }
}
