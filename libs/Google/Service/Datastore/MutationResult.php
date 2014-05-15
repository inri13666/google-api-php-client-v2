<?php 
namespace Google\Service\Datastore;
class MutationResult extends \Google\Collection
{
  public $indexUpdates;
  protected $insertAutoIdKeysType = 'Google\Service\Datastore\Key';
  protected $insertAutoIdKeysDataType = 'array';

  public function setIndexUpdates($indexUpdates)
  {
    $this->indexUpdates = $indexUpdates;
  }

  public function getIndexUpdates()
  {
    return $this->indexUpdates;
  }

  public function setInsertAutoIdKeys($insertAutoIdKeys)
  {
    $this->insertAutoIdKeys = $insertAutoIdKeys;
  }

  public function getInsertAutoIdKeys()
  {
    return $this->insertAutoIdKeys;
  }
}
