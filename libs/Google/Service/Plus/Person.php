<?php 
namespace Google\Service\Plus;
class Person extends \Google\Collection
{
  public $aboutMe;
  protected $ageRangeType = 'Google\Service\Plus\PersonAgeRange';
  protected $ageRangeDataType = '';
  public $birthday;
  public $braggingRights;
  public $circledByCount;
  protected $coverType = 'Google\Service\Plus\PersonCover';
  protected $coverDataType = '';
  public $currentLocation;
  public $displayName;
  public $domain;
  protected $emailsType = 'Google\Service\Plus\PersonEmails';
  protected $emailsDataType = 'array';
  public $etag;
  public $gender;
  public $id;
  protected $imageType = 'Google\Service\Plus\PersonImage';
  protected $imageDataType = '';
  public $isPlusUser;
  public $kind;
  public $language;
  protected $nameType = 'Google\Service\Plus\PersonName';
  protected $nameDataType = '';
  public $nickname;
  public $objectType;
  public $occupation;
  protected $organizationsType = 'Google\Service\Plus\PersonOrganizations';
  protected $organizationsDataType = 'array';
  protected $placesLivedType = 'Google\Service\Plus\PersonPlacesLived';
  protected $placesLivedDataType = 'array';
  public $plusOneCount;
  public $relationshipStatus;
  public $skills;
  public $tagline;
  public $url;
  protected $urlsType = 'Google\Service\Plus\PersonUrls';
  protected $urlsDataType = 'array';
  public $verified;

  public function setAboutMe($aboutMe)
  {
    $this->aboutMe = $aboutMe;
  }

  public function getAboutMe()
  {
    return $this->aboutMe;
  }

  public function setAgeRange(\Google\Service\Plus\PersonAgeRange $ageRange)
  {
    $this->ageRange = $ageRange;
  }

  public function getAgeRange()
  {
    return $this->ageRange;
  }

  public function setBirthday($birthday)
  {
    $this->birthday = $birthday;
  }

  public function getBirthday()
  {
    return $this->birthday;
  }

  public function setBraggingRights($braggingRights)
  {
    $this->braggingRights = $braggingRights;
  }

  public function getBraggingRights()
  {
    return $this->braggingRights;
  }

  public function setCircledByCount($circledByCount)
  {
    $this->circledByCount = $circledByCount;
  }

  public function getCircledByCount()
  {
    return $this->circledByCount;
  }

  public function setCover(\Google\Service\Plus\PersonCover $cover)
  {
    $this->cover = $cover;
  }

  public function getCover()
  {
    return $this->cover;
  }

  public function setCurrentLocation($currentLocation)
  {
    $this->currentLocation = $currentLocation;
  }

  public function getCurrentLocation()
  {
    return $this->currentLocation;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setEmails($emails)
  {
    $this->emails = $emails;
  }

  public function getEmails()
  {
    return $this->emails;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setGender($gender)
  {
    $this->gender = $gender;
  }

  public function getGender()
  {
    return $this->gender;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImage(\Google\Service\Plus\PersonImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setIsPlusUser($isPlusUser)
  {
    $this->isPlusUser = $isPlusUser;
  }

  public function getIsPlusUser()
  {
    return $this->isPlusUser;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function setName(\Google\Service\Plus\PersonName $name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNickname($nickname)
  {
    $this->nickname = $nickname;
  }

  public function getNickname()
  {
    return $this->nickname;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setOccupation($occupation)
  {
    $this->occupation = $occupation;
  }

  public function getOccupation()
  {
    return $this->occupation;
  }

  public function setOrganizations($organizations)
  {
    $this->organizations = $organizations;
  }

  public function getOrganizations()
  {
    return $this->organizations;
  }

  public function setPlacesLived($placesLived)
  {
    $this->placesLived = $placesLived;
  }

  public function getPlacesLived()
  {
    return $this->placesLived;
  }

  public function setPlusOneCount($plusOneCount)
  {
    $this->plusOneCount = $plusOneCount;
  }

  public function getPlusOneCount()
  {
    return $this->plusOneCount;
  }

  public function setRelationshipStatus($relationshipStatus)
  {
    $this->relationshipStatus = $relationshipStatus;
  }

  public function getRelationshipStatus()
  {
    return $this->relationshipStatus;
  }

  public function setSkills($skills)
  {
    $this->skills = $skills;
  }

  public function getSkills()
  {
    return $this->skills;
  }

  public function setTagline($tagline)
  {
    $this->tagline = $tagline;
  }

  public function getTagline()
  {
    return $this->tagline;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setUrls($urls)
  {
    $this->urls = $urls;
  }

  public function getUrls()
  {
    return $this->urls;
  }

  public function setVerified($verified)
  {
    $this->verified = $verified;
  }

  public function getVerified()
  {
    return $this->verified;
  }
}
