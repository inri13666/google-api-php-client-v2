<?php 
namespace Google\Service;
class Storage extends \Google\Service
{
  /** Manage your data and permissions in Google Cloud Storage. */
  const DEVSTORAGE_FULL_CONTROL = "https://www.googleapis.com/auth/devstorage.full_control";
  /** View your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_ONLY = "https://www.googleapis.com/auth/devstorage.read_only";
  /** Manage your data in Google Cloud Storage. */
  const DEVSTORAGE_READ_WRITE = "https://www.googleapis.com/auth/devstorage.read_write";

  public $bucketAccessControls;
  public $buckets;
  public $channels;
  public $defaultObjectAccessControls;
  public $objectAccessControls;
  public $objects;
  

  /**
   * Constructs the internal representation of the Storage service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'storage/v1/';
    $this->version = 'v1';
    $this->serviceName = 'storage';

    $this->bucketAccessControls = new \Google\Service\Storage\Resource\BucketAccessControls(
        $this,
        $this->serviceName,
        'bucketAccessControls',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'b/{bucket}/acl/{entity}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'b/{bucket}/acl/{entity}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'b/{bucket}/acl',
              'httpMethod' => 'POST',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'b/{bucket}/acl',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'b/{bucket}/acl/{entity}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'b/{bucket}/acl/{entity}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->buckets = new \Google\Service\Storage\Resource\Buckets(
        $this,
        $this->serviceName,
        'buckets',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'b/{bucket}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'b/{bucket}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'b',
              'httpMethod' => 'POST',
              'parameters' => array(
                'project' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'predefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'b',
              'httpMethod' => 'GET',
              'parameters' => array(
                'project' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'b/{bucket}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'predefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'b/{bucket}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'predefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->channels = new \Google\Service\Storage\Resource\Channels(
        $this,
        $this->serviceName,
        'channels',
        array(
          'methods' => array(
            'stop' => array(
              'path' => 'channels/stop',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->defaultObjectAccessControls = new \Google\Service\Storage\Resource\DefaultObjectAccessControls(
        $this,
        $this->serviceName,
        'defaultObjectAccessControls',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'b/{bucket}/defaultObjectAcl/{entity}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'b/{bucket}/defaultObjectAcl/{entity}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'b/{bucket}/defaultObjectAcl',
              'httpMethod' => 'POST',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'b/{bucket}/defaultObjectAcl',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'b/{bucket}/defaultObjectAcl/{entity}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'b/{bucket}/defaultObjectAcl/{entity}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->objectAccessControls = new \Google\Service\Storage\Resource\ObjectAccessControls(
        $this,
        $this->serviceName,
        'objectAccessControls',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'b/{bucket}/o/{object}/acl/{entity}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'b/{bucket}/o/{object}/acl/{entity}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'b/{bucket}/o/{object}/acl',
              'httpMethod' => 'POST',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'b/{bucket}/o/{object}/acl',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'b/{bucket}/o/{object}/acl/{entity}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'b/{bucket}/o/{object}/acl/{entity}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'entity' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->objects = new \Google\Service\Storage\Resource\Objects(
        $this,
        $this->serviceName,
        'objects',
        array(
          'methods' => array(
            'compose' => array(
              'path' => 'b/{destinationBucket}/o/{destinationObject}/compose',
              'httpMethod' => 'POST',
              'parameters' => array(
                'destinationBucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'destinationObject' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'destinationPredefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'copy' => array(
              'path' => 'b/{sourceBucket}/o/{sourceObject}/copyTo/b/{destinationBucket}/o/{destinationObject}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'sourceBucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'sourceObject' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'destinationBucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'destinationObject' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifSourceGenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifSourceMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sourceGeneration' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'destinationPredefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifSourceGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifSourceMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'delete' => array(
              'path' => 'b/{bucket}/o/{object}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifGenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'b/{bucket}/o/{object}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'ifGenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'b/{bucket}/o',
              'httpMethod' => 'POST',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'predefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'contentEncoding' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'b/{bucket}/o',
              'httpMethod' => 'GET',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'versions' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'prefix' => array(
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
                'delimiter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'patch' => array(
              'path' => 'b/{bucket}/o/{object}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'predefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'b/{bucket}/o/{object}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'object' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'predefinedAcl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'generation' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifGenerationMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'ifMetagenerationNotMatch' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'watchAll' => array(
              'path' => 'b/{bucket}/o/watch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'bucket' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'projection' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'versions' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'prefix' => array(
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
                'delimiter' => array(
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
