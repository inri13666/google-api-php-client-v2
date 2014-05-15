<?php 
namespace Google\Service\AdSense\Resource;
class AccountsSavedadstyles extends \Google\Resource\Service
{

  /**
   * List a specific saved ad style for the specified account. (savedadstyles.get)
   *
   * @param string $accountId
   * Account for which to get the saved ad style.
   * @param string $savedAdStyleId
   * Saved ad style to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\SavedAdStyle
   */
  public function get($accountId, $savedAdStyleId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'savedAdStyleId' => $savedAdStyleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSense\SavedAdStyle');
  }
  /**
   * List all saved ad styles in the specified account.
   * (savedadstyles.listAccountsSavedadstyles)
   *
   * @param string $accountId
   * Account for which to list saved ad styles.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through saved ad styles. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of saved ad styles to include in the response, used for paging.
   * @return \Google\Service\AdSense\SavedAdStyles
   */
  public function listAccountsSavedadstyles($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\SavedAdStyles');
  }
}
