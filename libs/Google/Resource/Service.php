<?php 
namespace Google\Resource;
class Service
{
  // Valid query parameters that work, but don't appear in discovery.
  private $stackParameters = array(
      'alt' => array('type' => 'string', 'location' => 'query'),
      'fields' => array('type' => 'string', 'location' => 'query'),
      'trace' => array('type' => 'string', 'location' => 'query'),
      'userIp' => array('type' => 'string', 'location' => 'query'),
      'userip' => array('type' => 'string', 'location' => 'query'),
      'quotaUser' => array('type' => 'string', 'location' => 'query'),
      'data' => array('type' => 'string', 'location' => 'body'),
      'mimeType' => array('type' => 'string', 'location' => 'header'),
      'uploadType' => array('type' => 'string', 'location' => 'query'),
      'mediaUpload' => array('type' => 'complex', 'location' => 'query'),
  );

  /** @var \Google\Service $service */
  private $service;

  /** @var \Google\Client $client */
  private $client;

  /** @var string $serviceName */
  private $serviceName;

  /** @var string $resourceName */
  private $resourceName;

  /** @var array $methods */
  private $methods;

  public function __construct($service, $serviceName, $resourceName, $resource)
  {
    $this->service = $service;
    $this->client = $service->getClient();
    $this->serviceName = $serviceName;
    $this->resourceName = $resourceName;
    $this->methods = isset($resource['methods']) ?
        $resource['methods'] :
        array($resourceName => $resource);
  }

  /**
   * TODO(ianbarber): This function needs simplifying.
   * @param $name
   * @param $arguments
   * @param $expected_class - optional, the expected class name
   * @return \Google\Http\Request|expected_class
   * @throws \Google\Exception
   */
  public function call($name, $arguments, $expected_class = null)
  {
    if (! isset($this->methods[$name])) {
      throw new \Google\Exception(
          "Unknown function: " .
          "{$this->serviceName}->{$this->resourceName}->{$name}()"
      );
    }
    $method = $this->methods[$name];
    $parameters = $arguments[0];

    // postBody is a special case since it's not defined in the discovery
    // document as parameter, but we abuse the param entry for storing it.
    $postBody = null;
    if (isset($parameters['postBody'])) {
      if ($parameters['postBody'] instanceof \Google\Model) {
        // In the cases the post body is an existing object, we want
        // to use the smart method to create a simple object for
        // for JSONification.
        $parameters['postBody'] = $parameters['postBody']->toSimpleObject();
      } else if (is_object($parameters['postBody'])) {
        // If the post body is another kind of object, we will try and
        // wrangle it into a sensible format.
        $parameters['postBody'] =
            $this->convertToArrayAndStripNulls($parameters['postBody']);
      }
      $postBody = json_encode($parameters['postBody']);
      unset($parameters['postBody']);
    }

    // TODO(ianbarber): optParams here probably should have been
    // handled already - this may well be redundant code.
    if (isset($parameters['optParams'])) {
      $optParams = $parameters['optParams'];
      unset($parameters['optParams']);
      $parameters = array_merge($parameters, $optParams);
    }

    if (!isset($method['parameters'])) {
      $method['parameters'] = array();
    }

    $method['parameters'] = array_merge(
        $method['parameters'],
        $this->stackParameters
    );
    foreach ($parameters as $key => $val) {
      if ($key != 'postBody' && ! isset($method['parameters'][$key])) {
        throw new \Google\Exception("($name) unknown parameter: '$key'");
      }
    }

    foreach ($method['parameters'] as $paramName => $paramSpec) {
      if (isset($paramSpec['required']) &&
          $paramSpec['required'] &&
          ! isset($parameters[$paramName])
      ) {
        throw new \Google\Exception("($name) missing required param: '$paramName'");
      }
      if (isset($parameters[$paramName])) {
        $value = $parameters[$paramName];
        $parameters[$paramName] = $paramSpec;
        $parameters[$paramName]['value'] = $value;
        unset($parameters[$paramName]['required']);
      } else {
        // Ensure we don't pass nulls.
        unset($parameters[$paramName]);
      }
    }

    $servicePath = $this->service->servicePath;

    $url = \Google\Http\REST::createRequestUri(
        $servicePath,
        $method['path'],
        $parameters
    );
    $httpRequest = new \Google\Http\Request(
        $url,
        $method['httpMethod'],
        null,
        $postBody
    );
    $httpRequest->setBaseComponent($this->client->getBasePath());

    if ($postBody) {
      $contentTypeHeader = array();
      $contentTypeHeader['content-type'] = 'application/json; charset=UTF-8';
      $httpRequest->setRequestHeaders($contentTypeHeader);
      $httpRequest->setPostBody($postBody);
    }

    $httpRequest = $this->client->getAuth()->sign($httpRequest);
    $httpRequest->setExpectedClass($expected_class);

    if (isset($parameters['data']) &&
        ($parameters['uploadType']['value'] == 'media' || $parameters['uploadType']['value'] == 'multipart')) {
      // If we are doing a simple media upload, trigger that as a convenience.
      $mfu = new \Google\Http\MediaFileUpload(
          $this->client,
          $httpRequest,
          isset($parameters['mimeType']) ? $parameters['mimeType']['value'] : 'application/octet-stream',
          $parameters['data']['value']
      );
    }

    if ($this->client->shouldDefer()) {
      // If we are in batch or upload mode, return the raw request.
      return $httpRequest;
    }

    return $this->client->execute($httpRequest);
  }

  protected function convertToArrayAndStripNulls($o)
  {
    $o = (array) $o;
    foreach ($o as $k => $v) {
      if ($v === null) {
        unset($o[$k]);
      } elseif (is_object($v) || is_array($v)) {
        $o[$k] = $this->convertToArrayAndStripNulls($o[$k]);
      }
    }
    return $o;
  }
}
