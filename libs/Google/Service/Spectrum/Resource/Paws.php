<?php 
namespace Google\Service\Spectrum\Resource;
class Paws extends \Google\Resource\Service
{

  /**
   * Requests information about the available spectrum for a device at a location.
   * Requests from a fixed-mode device must include owner information so the
   * device can be registered with the database. (paws.getSpectrum)
   *
   * @param Google_PawsGetSpectrumRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsGetSpectrumResponse
   */
  public function getSpectrum(\Google\Service\Spectrum\PawsGetSpectrumRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getSpectrum', array($params), 'Google\Service\Spectrum\PawsGetSpectrumResponse');
  }
  /**
   * The Google Spectrum Database does not support batch requests, so this method
   * always yields an UNIMPLEMENTED error. (paws.getSpectrumBatch)
   *
   * @param Google_PawsGetSpectrumBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsGetSpectrumBatchResponse
   */
  public function getSpectrumBatch(\Google\Service\Spectrum\PawsGetSpectrumBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getSpectrumBatch', array($params), 'Google\Service\Spectrum\PawsGetSpectrumBatchResponse');
  }
  /**
   * Initializes the connection between a white space device and the database.
   * (paws.init)
   *
   * @param Google_PawsInitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsInitResponse
   */
  public function init(\Google\Service\Spectrum\PawsInitRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('init', array($params), 'Google\Service\Spectrum\PawsInitResponse');
  }
  /**
   * Notifies the database that the device has selected certain frequency ranges
   * for transmission. Only to be invoked when required by the regulator. The
   * Google Spectrum Database does not operate in domains that require
   * notification, so this always yields an UNIMPLEMENTED error.
   * (paws.notifySpectrumUse)
   *
   * @param Google_PawsNotifySpectrumUseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsNotifySpectrumUseResponse
   */
  public function notifySpectrumUse(\Google\Service\Spectrum\PawsNotifySpectrumUseRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('notifySpectrumUse', array($params), 'Google\Service\Spectrum\PawsNotifySpectrumUseResponse');
  }
  /**
   * The Google Spectrum Database implements registration in the getSpectrum
   * method. As such this always returns an UNIMPLEMENTED error. (paws.register)
   *
   * @param Google_PawsRegisterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsRegisterResponse
   */
  public function register(\Google\Service\Spectrum\PawsRegisterRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('register', array($params), 'Google\Service\Spectrum\PawsRegisterResponse');
  }
  /**
   * Validates a device for white space use in accordance with regulatory rules.
   * The Google Spectrum Database does not support master/slave configurations, so
   * this always yields an UNIMPLEMENTED error. (paws.verifyDevice)
   *
   * @param Google_PawsVerifyDeviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsVerifyDeviceResponse
   */
  public function verifyDevice(\Google\Service\Spectrum\PawsVerifyDeviceRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyDevice', array($params), 'Google\Service\Spectrum\PawsVerifyDeviceResponse');
  }
}
