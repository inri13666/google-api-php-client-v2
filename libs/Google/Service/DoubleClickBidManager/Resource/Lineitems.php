<?php 
namespace Google\Service\DoubleClickBidManager\Resource;
class Lineitems extends \Google\Resource\Service
{

  /**
   * Retrieves line items in CSV format. (lineitems.downloadlineitems)
   *
   * @param Google_DownloadLineItemsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\DownloadLineItemsResponse
   */
  public function downloadlineitems(\Google\Service\DoubleClickBidManager\DownloadLineItemsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('downloadlineitems', array($params), 'Google\Service\DoubleClickBidManager\DownloadLineItemsResponse');
  }
  /**
   * Uploads line items in CSV format. (lineitems.uploadlineitems)
   *
   * @param Google_UploadLineItemsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\UploadLineItemsResponse
   */
  public function uploadlineitems(\Google\Service\DoubleClickBidManager\UploadLineItemsRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('uploadlineitems', array($params), 'Google\Service\DoubleClickBidManager\UploadLineItemsResponse');
  }
}
