<?php 
namespace Google\Service\Books\Resource;
class Bookshelves extends \Google\Resource\Service
{

  /**
   * Retrieves metadata for a specific bookshelf for the specified user.
   * (bookshelves.get)
   *
   * @param string $userId
   * ID of user for whom to retrieve bookshelves.
   * @param string $shelf
   * ID of bookshelf to retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\Bookshelf
   */
  public function get($userId, $shelf, $optParams = array())
  {
    $params = array('userId' => $userId, 'shelf' => $shelf);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Books\Bookshelf');
  }
  /**
   * Retrieves a list of public bookshelves for the specified user.
   * (bookshelves.listBookshelves)
   *
   * @param string $userId
   * ID of user for whom to retrieve bookshelves.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source
   * String to identify the originator of this request.
   * @return \Google\Service\Books\Bookshelves
   */
  public function listBookshelves($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Bookshelves');
  }
}
