<?php 
namespace Google\Service\Books\Resource;
class BookshelvesVolumes extends \Google\Resource\Service
{

  /**
   * Retrieves volumes in a specific bookshelf for the specified user.
   * (volumes.listBookshelvesVolumes)
   *
   * @param string $userId
   * ID of user for whom to retrieve bookshelf volumes.
   * @param string $shelf
   * ID of bookshelf to retrieve volumes.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool showPreorders
   * Set to true to show pre-ordered books. Defaults to false.
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string startIndex
   * Index of the first element to return (starts at 0)
   * @return \Google\Service\Books\Volumes
   */
  public function listBookshelvesVolumes($userId, $shelf, $optParams = array())
  {
    $params = array('userId' => $userId, 'shelf' => $shelf);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumes');
  }
}
