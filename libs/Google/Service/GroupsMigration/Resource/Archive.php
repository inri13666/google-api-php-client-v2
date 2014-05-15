<?php 
namespace Google\Service\GroupsMigration\Resource;
class Archive extends \Google\Resource\Service
{

  /**
   * Inserts a new mail into the archive of the Google group. (archive.insert)
   *
   * @param string $groupId
   * The group ID
   * @param array $optParams Optional parameters.
   * @return \Google\Service\GroupsMigration\Groups
   */
  public function insert($groupId, $optParams = array())
  {
    $params = array('groupId' => $groupId);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\GroupsMigration\Groups');
  }
}
