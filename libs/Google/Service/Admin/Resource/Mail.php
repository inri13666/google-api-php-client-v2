<?php 
namespace Google\Service\Admin\Resource;
class Mail extends \Google\Resource\Service
{

  /**
   * Insert Mail into Google's Gmail backends (mail.insert)
   *
   * @param string $userKey
   * The email or immutable id of the user
   * @param Google_MailItem $postBody
   * @param array $optParams Optional parameters.
   */
  public function insert($userKey, \Google\Service\Admin\MailItem $postBody, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params));
  }
}
