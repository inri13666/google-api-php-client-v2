<?php 
namespace Google\Service;
class PlusDomains extends \Google\Service
{
  /** View your circles and the people and pages in them. */
  const PLUS_CIRCLES_READ = "https://www.googleapis.com/auth/plus.circles.read";
  /** Manage your circles and add people and pages, who will be notified and may appear on your public Google+ profile. */
  const PLUS_CIRCLES_WRITE = "https://www.googleapis.com/auth/plus.circles.write";
  /** Know your basic profile info and list of people in your circles.. */
  const PLUS_LOGIN = "https://www.googleapis.com/auth/plus.login";
  /** Know who you are on Google. */
  const PLUS_ME = "https://www.googleapis.com/auth/plus.me";
  /** Send your photos and videos to Google+. */
  const PLUS_MEDIA_UPLOAD = "https://www.googleapis.com/auth/plus.media.upload";
  /** View your own Google+ profile and profiles visible to you. */
  const PLUS_PROFILES_READ = "https://www.googleapis.com/auth/plus.profiles.read";
  /** View your Google+ posts, comments, and stream. */
  const PLUS_STREAM_READ = "https://www.googleapis.com/auth/plus.stream.read";
  /** Manage your Google+ posts, comments, and stream. */
  const PLUS_STREAM_WRITE = "https://www.googleapis.com/auth/plus.stream.write";
  /** View your email address. */
  const USERINFO_EMAIL = "https://www.googleapis.com/auth/userinfo.email";
  /** View basic information about your account. */
  const USERINFO_PROFILE = "https://www.googleapis.com/auth/userinfo.profile";

  public $activities;
  public $audiences;
  public $circles;
  public $comments;
  public $media;
  public $people;
  

  /**
   * Constructs the internal representation of the PlusDomains service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'plusDomains/v1/';
    $this->version = 'v1';
    $this->serviceName = 'plusDomains';

    $this->activities = new \Google\Service\PlusDomains\Resource\Activities(
        $this,
        $this->serviceName,
        'activities',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'activities/{activityId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'people/{userId}/activities',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'preview' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/activities/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
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
    $this->audiences = new \Google\Service\PlusDomains\Resource\Audiences(
        $this,
        $this->serviceName,
        'audiences',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'people/{userId}/audiences',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
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
    $this->circles = new \Google\Service\PlusDomains\Resource\Circles(
        $this,
        $this->serviceName,
        'circles',
        array(
          'methods' => array(
            'addPeople' => array(
              'path' => 'circles/{circleId}/people',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'circleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'email' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'circles/{circleId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'circleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'people/{userId}/circles',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/circles',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
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
              'path' => 'circles/{circleId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'circleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'remove' => array(
              'path' => 'circles/{circleId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'circleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'removePeople' => array(
              'path' => 'circles/{circleId}/people',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'circleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
                'email' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'repeated' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'circles/{circleId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'circleId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->comments = new \Google\Service\PlusDomains\Resource\Comments(
        $this,
        $this->serviceName,
        'comments',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'comments/{commentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'activities/{activityId}/comments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'activities/{activityId}/comments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'sortOrder' => array(
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
    $this->media = new \Google\Service\PlusDomains\Resource\Media(
        $this,
        $this->serviceName,
        'media',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'people/{userId}/media/{collection}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->people = new \Google\Service\PlusDomains\Resource\People(
        $this,
        $this->serviceName,
        'people',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'people/{userId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/people/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
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
            ),'listByActivity' => array(
              'path' => 'activities/{activityId}/people/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
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
            ),'listByCircle' => array(
              'path' => 'circles/{circleId}/people',
              'httpMethod' => 'GET',
              'parameters' => array(
                'circleId' => array(
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
