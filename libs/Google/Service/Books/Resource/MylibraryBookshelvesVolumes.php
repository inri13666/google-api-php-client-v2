<?php 
namespace Google\Service\Books\Resource;
class MylibraryBookshelvesVolumes extends \Google\Resource\Service
{

  /**
   * Gets volume information for volumes on a bookshelf.
   * (volumes.listMylibraryBookshelvesVolumes)
   *
   * @param string $shelf
   * The bookshelf ID or name retrieve volumes for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Restrict information returned to a set of selected fields.
   * @opt_param string country
   * ISO-3166-1 code to override the IP-based location.
   * @opt_param bool showPreorders
   * Set to true to show pre-ordered books. Defaults to false.
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string q
   * Full-text search query string in this bookshelf.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string startIndex
   * Index of the first element to return (starts at 0)
   * @return \Google\Service\Books\Volumes
   */
  public function listMylibraryBookshelvesVolumes($shelf, $optParams = array())
  {
    $params = array('shelf' => $shelf);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumes');
  }
}
