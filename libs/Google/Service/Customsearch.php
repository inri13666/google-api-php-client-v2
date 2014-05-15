<?php 
namespace Google\Service;
class Customsearch extends \Google\Service
{


  public $cse;
  

  /**
   * Constructs the internal representation of the Customsearch service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'customsearch/';
    $this->version = 'v1';
    $this->serviceName = 'customsearch';

    $this->cse = new \Google\Service\Customsearch\Resource\Cse(
        $this,
        $this->serviceName,
        'cse',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1',
              'httpMethod' => 'GET',
              'parameters' => array(
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'sort' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'orTerms' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'highRange' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'num' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'cr' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'imgType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'gl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'relatedSite' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'searchType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'fileType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'start' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'imgDominantColor' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'lr' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'siteSearch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'cref' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'dateRestrict' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'safe' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'c2coff' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'googlehost' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'hq' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'exactTerms' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'lowRange' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'imgSize' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'imgColorType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'rights' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'excludeTerms' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'filter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'linkSite' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'cx' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'siteSearchFilter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
  }
}
