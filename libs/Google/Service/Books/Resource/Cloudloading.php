<?php 
namespace Google\Service\Books\Resource;
class Cloudloading extends \Google\Resource\Service
{

  /**
   * (cloudloading.addBook)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string upload_client_token
   *
   * @opt_param string drive_document_id
   * A drive document id. The upload_client_token must not be set.
   * @opt_param string mime_type
   * The document MIME type. It can be set only if the drive_document_id is set.
   * @opt_param string name
   * The document name. It can be set only if the drive_document_id is set.
   * @return \Google\Service\Books\BooksCloudloadingResource
   */
  public function addBook($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('addBook', array($params), 'Google\Service\Books\BooksCloudloadingResource');
  }
  /**
   * Remove the book and its contents (cloudloading.deleteBook)
   *
   * @param string $volumeId
   * The id of the book to be removed.
   * @param array $optParams Optional parameters.
   */
  public function deleteBook($volumeId, $optParams = array())
  {
    $params = array('volumeId' => $volumeId);
    $params = array_merge($params, $optParams);
    return $this->call('deleteBook', array($params));
  }
  /**
   * (cloudloading.updateBook)
   *
   * @param Google_BooksCloudloadingResource $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Books\BooksCloudloadingResource
   */
  public function updateBook(\Google\Service\Books\BooksCloudloadingResource $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updateBook', array($params), 'Google\Service\Books\BooksCloudloadingResource');
  }
}
