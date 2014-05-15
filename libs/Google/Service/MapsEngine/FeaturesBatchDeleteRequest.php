<?php 
namespace Google\Service\MapsEngine;
class FeaturesBatchDeleteRequest extends \Google\Collection
{
  public $gxIds;
  public $primaryKeys;

  public function setGxIds($gxIds)
  {
    $this->gxIds = $gxIds;
  }

  public function getGxIds()
  {
    return $this->gxIds;
  }

  public function setPrimaryKeys($primaryKeys)
  {
    $this->primaryKeys = $primaryKeys;
  }

  public function getPrimaryKeys()
  {
    return $this->primaryKeys;
  }
}
