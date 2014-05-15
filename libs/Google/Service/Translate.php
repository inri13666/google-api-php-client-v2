<?php 
namespace Google\Service;
class Translate extends \Google\Service
{


  public $detections;
  public $languages;
  public $translations;
  

  /**
   * Constructs the internal representation of the Translate service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'language/translate/';
    $this->version = 'v2';
    $this->serviceName = 'translate';

    $this->detections = new \Google\Service\Translate\Resource\Detections(
        $this,
        $this->serviceName,
        'detections',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2/detect',
              'httpMethod' => 'GET',
              'parameters' => array(
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->languages = new \Google\Service\Translate\Resource\Languages(
        $this,
        $this->serviceName,
        'languages',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2/languages',
              'httpMethod' => 'GET',
              'parameters' => array(
                'target' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->translations = new \Google\Service\Translate\Resource\Translations(
        $this,
        $this->serviceName,
        'translations',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v2',
              'httpMethod' => 'GET',
              'parameters' => array(
                'q' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                  'required' => true,
                ),
                'target' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'source' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'format' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'cid' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
