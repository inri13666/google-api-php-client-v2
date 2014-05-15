<?php 
namespace Google\Service\Books\Resource;
class VolumesMybooks extends \Google\Resource\Service
{

  /**
   * Return a list of books in My Library. (mybooks.listVolumesMybooks)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * ISO-639-1 language and ISO-3166-1 country code. Ex:'en_US'. Used for generating recommendations.
   * @opt_param string startIndex
   * Index of the first result to return (starts at 0)
   * @opt_param string maxResults
   * Maximum number of results to return.
   * @opt_param string source
   * String to identify the originator of this request.
   * @opt_param string acquireMethod
   * How the book was aquired
   * @opt_param string processingState
   * The processing state of the user uploaded volumes to be returned. Applicable only if the
    * UPLOADED is specified in the acquireMethod.
   * @return \Google\Service\Books\Volumes
   */
  public function listVolumesMybooks($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Books\Volumes');
  }
}
