<?php 
namespace Google\Service\IdentityToolkit\Resource;
class Relyingparty extends \Google\Resource\Service
{

  /**
   * Creates the URI used by the IdP to authenticate the user.
   * (relyingparty.createAuthUri)
   *
   * @param Google_IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\CreateAuthUriResponse
   */
  public function createAuthUri(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createAuthUri', array($params), 'Google\Service\IdentityToolkit\CreateAuthUriResponse');
  }
  /**
   * Delete user account. (relyingparty.deleteAccount)
   *
   * @param Google_IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\DeleteAccountResponse
   */
  public function deleteAccount(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deleteAccount', array($params), 'Google\Service\IdentityToolkit\DeleteAccountResponse');
  }
  /**
   * Batch download user accounts. (relyingparty.downloadAccount)
   *
   * @param Google_IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\DownloadAccountResponse
   */
  public function downloadAccount(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('downloadAccount', array($params), 'Google\Service\IdentityToolkit\DownloadAccountResponse');
  }
  /**
   * Returns the account info. (relyingparty.getAccountInfo)
   *
   * @param Google_IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\GetAccountInfoResponse
   */
  public function getAccountInfo(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getAccountInfo', array($params), 'Google\Service\IdentityToolkit\GetAccountInfoResponse');
  }
  /**
   * Get a code for user action confirmation.
   * (relyingparty.getOobConfirmationCode)
   *
   * @param Google_Relyingparty $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\GetOobConfirmationCodeResponse
   */
  public function getOobConfirmationCode(\Google\Service\IdentityToolkit\Relyingparty $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getOobConfirmationCode', array($params), 'Google\Service\IdentityToolkit\GetOobConfirmationCodeResponse');
  }
  /**
   * Get token signing public key. (relyingparty.getPublicKeys)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse
   */
  public function getPublicKeys($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getPublicKeys', array($params), "\Google\Service\IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse");
  }
  /**
   * Set account info for a user. (relyingparty.resetPassword)
   *
   * @param Google_IdentitytoolkitRelyingpartyResetPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\ResetPasswordResponse
   */
  public function resetPassword(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyResetPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resetPassword', array($params), 'Google\Service\IdentityToolkit\ResetPasswordResponse');
  }
  /**
   * Set account info for a user. (relyingparty.setAccountInfo)
   *
   * @param Google_IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\SetAccountInfoResponse
   */
  public function setAccountInfo(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAccountInfo', array($params), 'Google\Service\IdentityToolkit\SetAccountInfoResponse');
  }
  /**
   * Batch upload existing user accounts. (relyingparty.uploadAccount)
   *
   * @param Google_IdentitytoolkitRelyingpartyUploadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\UploadAccountResponse
   */
  public function uploadAccount(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyUploadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('uploadAccount', array($params), 'Google\Service\IdentityToolkit\UploadAccountResponse');
  }
  /**
   * Verifies the assertion returned by the IdP. (relyingparty.verifyAssertion)
   *
   * @param Google_IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\VerifyAssertionResponse
   */
  public function verifyAssertion(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyAssertion', array($params), 'Google\Service\IdentityToolkit\VerifyAssertionResponse');
  }
  /**
   * Verifies the user entered password. (relyingparty.verifyPassword)
   *
   * @param Google_IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\VerifyPasswordResponse
   */
  public function verifyPassword(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyPassword', array($params), 'Google\Service\IdentityToolkit\VerifyPasswordResponse');
  }
}
