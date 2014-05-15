<?php 
namespace Google\Service;
class MapsEngine extends \Google\Service
{
  /** View and manage your Google Maps Engine data. */
  const MAPSENGINE = "https://www.googleapis.com/auth/mapsengine";
  /** View your Google Maps Engine data. */
  const MAPSENGINE_READONLY = "https://www.googleapis.com/auth/mapsengine.readonly";

  public $assets;
  public $assets_parents;
  public $layers;
  public $layers_parents;
  public $maps;
  public $projects;
  public $rasterCollections;
  public $rasterCollections_parents;
  public $rasterCollections_rasters;
  public $rasters;
  public $rasters_files;
  public $rasters_parents;
  public $tables;
  public $tables_features;
  public $tables_files;
  public $tables_parents;
  

  /**
   * Constructs the internal representation of the MapsEngine service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'mapsengine/v1/';
    $this->version = 'v1';
    $this->serviceName = 'mapsengine';

    $this->assets = new \Google\Service\MapsEngine\Resource\Assets(
        $this,
        $this->serviceName,
        'assets',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'assets/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'assets',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'type' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->assets_parents = new \Google\Service\MapsEngine\Resource\AssetsParents(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'assets/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->layers = new \Google\Service\MapsEngine\Resource\Layers(
        $this,
        $this->serviceName,
        'layers',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'layers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'process' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'get' => array(
              'path' => 'layers/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'layers',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'process' => array(
              'path' => 'layers/{id}/process',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'publish' => array(
              'path' => 'layers/{id}/publish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->layers_parents = new \Google\Service\MapsEngine\Resource\LayersParents(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'layers/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->maps = new \Google\Service\MapsEngine\Resource\Maps(
        $this,
        $this->serviceName,
        'maps',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'maps',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'maps/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'maps',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'publish' => array(
              'path' => 'maps/{id}/publish',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects = new \Google\Service\MapsEngine\Resource\Projects(
        $this,
        $this->serviceName,
        'projects',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'projects',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->rasterCollections = new \Google\Service\MapsEngine\Resource\RasterCollections(
        $this,
        $this->serviceName,
        'rasterCollections',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'rasterCollections',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'rasterCollections/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'rasterCollections',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'process' => array(
              'path' => 'rasterCollections/{id}/process',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rasterCollections_parents = new \Google\Service\MapsEngine\Resource\RasterCollectionsParents(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'rasterCollections/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->rasterCollections_rasters = new \Google\Service\MapsEngine\Resource\RasterCollectionsRasters(
        $this,
        $this->serviceName,
        'rasters',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'rasterCollections/{id}/rasters/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchInsert' => array(
              'path' => 'rasterCollections/{id}/rasters/batchInsert',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'rasterCollections/{id}/rasters',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->rasters = new \Google\Service\MapsEngine\Resource\Rasters(
        $this,
        $this->serviceName,
        'rasters',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'rasters/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'upload' => array(
              'path' => 'rasters/upload',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->rasters_files = new \Google\Service\MapsEngine\Resource\RastersFiles(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'rasters/{id}/files',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filename' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rasters_parents = new \Google\Service\MapsEngine\Resource\RastersParents(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'rasters/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
    $this->tables = new \Google\Service\MapsEngine\Resource\Tables(
        $this,
        $this->serviceName,
        'tables',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'tables',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'get' => array(
              'path' => 'tables/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'tables',
              'httpMethod' => 'GET',
              'parameters' => array(
                'modifiedAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdAfter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projectId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'creatorEmail' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'bbox' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'modifiedBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'createdBefore' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'upload' => array(
              'path' => 'tables/upload',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->tables_features = new \Google\Service\MapsEngine\Resource\TablesFeatures(
        $this,
        $this->serviceName,
        'features',
        array(
          'methods' => array(
            'batchDelete' => array(
              'path' => 'tables/{id}/features/batchDelete',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchInsert' => array(
              'path' => 'tables/{id}/features/batchInsert',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'batchPatch' => array(
              'path' => 'tables/{id}/features/batchPatch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/features/{id}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'select' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{id}/features',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'intersects' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'version' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'limit' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'include' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'where' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'select' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->tables_files = new \Google\Service\MapsEngine\Resource\TablesFiles(
        $this,
        $this->serviceName,
        'files',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'tables/{id}/files',
              'httpMethod' => 'POST',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'filename' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->tables_parents = new \Google\Service\MapsEngine\Resource\TablesParents(
        $this,
        $this->serviceName,
        'parents',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'tables/{id}/parents',
              'httpMethod' => 'GET',
              'parameters' => array(
                'id' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),
          )
        )
    );
  }
}
