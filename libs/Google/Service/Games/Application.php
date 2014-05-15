<?php 
namespace Google\Service\Games;
class Application extends \Google\Collection
{
  public $achievementCount;
  protected $assetsType = 'Google\Service\Games\ImageAsset';
  protected $assetsDataType = 'array';
  public $author;
  protected $categoryType = 'Google\Service\Games\ApplicationCategory';
  protected $categoryDataType = '';
  public $description;
  public $id;
  protected $instancesType = 'Google\Service\Games\Instance';
  protected $instancesDataType = 'array';
  public $kind;
  public $lastUpdatedTimestamp;
  public $leaderboardCount;
  public $name;

  public function setAchievementCount($achievementCount)
  {
    $this->achievementCount = $achievementCount;
  }

  public function getAchievementCount()
  {
    return $this->achievementCount;
  }

  public function setAssets($assets)
  {
    $this->assets = $assets;
  }

  public function getAssets()
  {
    return $this->assets;
  }

  public function setAuthor($author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setCategory(\Google\Service\Games\ApplicationCategory $category)
  {
    $this->category = $category;
  }

  public function getCategory()
  {
    return $this->category;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInstances($instances)
  {
    $this->instances = $instances;
  }

  public function getInstances()
  {
    return $this->instances;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }

  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }

  public function setLeaderboardCount($leaderboardCount)
  {
    $this->leaderboardCount = $leaderboardCount;
  }

  public function getLeaderboardCount()
  {
    return $this->leaderboardCount;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}
