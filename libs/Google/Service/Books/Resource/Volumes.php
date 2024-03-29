<?php 
namespace Google\Service\Books\Resource;
class Volumes extends \Google\Resource\Service
{

  /**
   * Gets volume information for a single volume. (volumes.get)
   *
   * @param string $volumeId
   * ID of volume to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string country
   * ISO-3166-1 code to override the IP-based location.
   * @opt_param string projection
   * Restrict information returned to a set of selected fields.
   * @opt_param string partner
   * Brand results for partner ID.
   * @return \Google\Service\Books\Volume
   */
  public function get($volumeId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\Volume');
  }
  /**
   * Performs a book search. (volumes.listVolumes)
   *
   * @param string $q
   * Full-text search query string.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * Sort search results.
   * @opt_param string projection
   * Restrict information returned to a set of selected fields.
   * @opt_param string libraryRestrict
   * Restrict search to this user's library.
   * @opt_param string langRestrict
   * Restrict results to books with this language code.
   * @opt_param bool showPreorders
   * Set to true to show books available for preorder. Defaults to false.
   * @opt_param string printType
   * Restrict to books or magazines.
   * @opt_param string maxResults
   * Maximum number of results to return.
   * @opt_param string filter
   * Filter search results.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string startIndex
   * Index of the first result to return (starts at 0)
   * @opt_param string download
   * Restrict to volumes by download availability.
   * @opt_param string partner
   * Restrict and brand results for partner ID.
   * @return \Google\Service\Books\Volumes
   */
  public function listVolumes($q, $optParams = array())
  {
    $params = array('q' => $q);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumes');
  }
}
