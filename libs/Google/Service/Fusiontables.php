<?php 
namespace Google\Service;
class Fusiontables extends \Google\Service
{
  /** Manage your Fusion Tables. */
  const FUSIONTABLES = "https://www.googleapis.com/auth/fusiontables";
  /** View your Fusion Tables. */
  const FUSIONTABLES_READONLY = "https://www.googleapis.com/auth/fusiontables.readonly";

  public $column;
  public $query;
  public $style;
  public $table;
  public $template;
  

  /**
   * Constructs the internal representation of the Fusiontables service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'fusiontables/v1/';
    $this->version = 'v1';
    $this->serviceName = 'fusiontables';

    $this->column = new \Google\Service\Fusiontables\Resource\Column(
        $this,
        $this->serviceName,
        'column',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'tables/{tableId}/columns',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{tableId}/columns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
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
            ),'patch' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->query = new \Google\Service\Fusiontables\Resource\Query(
        $this,
        $this->serviceName,
        'query',
        array(
          'methods' => array(
            'sql' => array(
              'path' => 'query',
              'httpMethod' => 'POST',
              'parameters' => array(
                'sql' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'typed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'hdrs' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'sqlGet' => array(
              'path' => 'query',
              'httpMethod' => 'GET',
              'parameters' => array(
                'sql' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'typed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'hdrs' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->style = new \Google\Service\Fusiontables\Resource\Style(
        $this,
        $this->serviceName,
        'style',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'tables/{tableId}/styles',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{tableId}/styles',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
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
            ),'patch' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->table = new \Google\Service\Fusiontables\Resource\Table(
        $this,
        $this->serviceName,
        'table',
        array(
          'methods' => array(
            'copy' => array(
              'path' => 'tables/{tableId}/copy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'copyPresentation' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'importRows' => array(
              'path' => 'tables/{tableId}/import',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startLine' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'isStrict' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'encoding' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'delimiter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endLine' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'importTable' => array(
              'path' => 'tables/import',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'delimiter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'encoding' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'tables',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'tables',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replaceViewDefinition' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replaceViewDefinition' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->template = new \Google\Service\Fusiontables\Resource\Template(
        $this,
        $this->serviceName,
        'template',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'tables/{tableId}/templates',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{tableId}/templates',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
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
            ),'patch' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}
