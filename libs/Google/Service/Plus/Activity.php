<?php 
namespace Google\Service\Plus;
class Activity extends \Google\Model
{
  protected $accessType = 'Google\Service\Plus\Acl';
  protected $accessDataType = '';
  protected $actorType = 'Google\Service\Plus\ActivityActor';
  protected $actorDataType = '';
  public $address;
  public $annotation;
  public $crosspostSource;
  public $etag;
  public $geocode;
  public $id;
  public $kind;
  protected $locationType = 'Google\Service\Plus\Place';
  protected $locationDataType = '';
  protected $objectType = 'Google\Service\Plus\ActivityObject';
  protected $objectDataType = '';
  public $placeId;
  public $placeName;
  protected $providerType = 'Google\Service\Plus\ActivityProvider';
  protected $providerDataType = '';
  public $published;
  public $radius;
  public $title;
  public $updated;
  public $url;
  public $verb;

  public function setAccess(\Google\Service\Plus\Acl $access)
  {
    $this->access = $access;
  }

  public function getAccess()
  {
    return $this->access;
  }

  public function setActor(\Google\Service\Plus\ActivityActor $actor)
  {
    $this->actor = $actor;
  }

  public function getActor()
  {
    return $this->actor;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setAnnotation($annotation)
  {
    $this->annotation = $annotation;
  }

  public function getAnnotation()
  {
    return $this->annotation;
  }

  public function setCrosspostSource($crosspostSource)
  {
    $this->crosspostSource = $crosspostSource;
  }

  public function getCrosspostSource()
  {
    return $this->crosspostSource;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setGeocode($geocode)
  {
    $this->geocode = $geocode;
  }

  public function getGeocode()
  {
    return $this->geocode;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocation(\Google\Service\Plus\Place $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setObject(\Google\Service\Plus\ActivityObject $object)
  {
    $this->object = $object;
  }

  public function getObject()
  {
    return $this->object;
  }

  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }

  public function getPlaceId()
  {
    return $this->placeId;
  }

  public function setPlaceName($placeName)
  {
    $this->placeName = $placeName;
  }

  public function getPlaceName()
  {
    return $this->placeName;
  }

  public function setProvider(\Google\Service\Plus\ActivityProvider $provider)
  {
    $this->provider = $provider;
  }

  public function getProvider()
  {
    return $this->provider;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setRadius($radius)
  {
    $this->radius = $radius;
  }

  public function getRadius()
  {
    return $this->radius;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function setVerb($verb)
  {
    $this->verb = $verb;
  }

  public function getVerb()
  {
    return $this->verb;
  }
}
