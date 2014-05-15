<?php 
namespace Google\Service;
class Games extends \Google\Service
{
  /** Share your Google+ profile information and view and manage your game activity. */
  const GAMES = "https://www.googleapis.com/auth/games";
  /** Know your basic profile info and list of people in your circles.. */
  const PLUS_LOGIN = "https://www.googleapis.com/auth/plus.login";

  public $achievementDefinitions;
  public $achievements;
  public $applications;
  public $leaderboards;
  public $players;
  public $pushtokens;
  public $revisions;
  public $rooms;
  public $scores;
  public $turnBasedMatches;
  

  /**
   * Constructs the internal representation of the Games service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'games/v1/';
    $this->version = 'v1';
    $this->serviceName = 'games';

    $this->achievementDefinitions = new \Google\Service\Games\Resource\AchievementDefinitions(
        $this,
        $this->serviceName,
        'achievementDefinitions',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'achievements',
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
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->achievements = new \Google\Service\Games\Resource\Achievements(
        $this,
        $this->serviceName,
        'achievements',
        array(
          'methods' => array(
            'increment' => array(
              'path' => 'achievements/{achievementId}/increment',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'stepsToIncrement' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/{playerId}/achievements',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'state' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reveal' => array(
              'path' => 'achievements/{achievementId}/reveal',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'setStepsAtLeast' => array(
              'path' => 'achievements/{achievementId}/setStepsAtLeast',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'steps' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'unlock' => array(
              'path' => 'achievements/{achievementId}/unlock',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'updateMultiple' => array(
              'path' => 'achievements/updateMultiple',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->applications = new \Google\Service\Games\Resource\Applications(
        $this,
        $this->serviceName,
        'applications',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'applications/{applicationId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'platformType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'played' => array(
              'path' => 'applications/played',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->leaderboards = new \Google\Service\Games\Resource\Leaderboards(
        $this,
        $this->serviceName,
        'leaderboards',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'leaderboards/{leaderboardId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'leaderboards',
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
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->players = new \Google\Service\Games\Resource\Players(
        $this,
        $this->serviceName,
        'players',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'players/me/players/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
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
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->pushtokens = new \Google\Service\Games\Resource\Pushtokens(
        $this,
        $this->serviceName,
        'pushtokens',
        array(
          'methods' => array(
            'remove' => array(
              'path' => 'pushtokens/remove',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'update' => array(
              'path' => 'pushtokens',
              'httpMethod' => 'PUT',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->revisions = new \Google\Service\Games\Resource\Revisions(
        $this,
        $this->serviceName,
        'revisions',
        array(
          'methods' => array(
            'check' => array(
              'path' => 'revisions/check',
              'httpMethod' => 'GET',
              'parameters' => array(
                'clientRevision' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rooms = new \Google\Service\Games\Resource\Rooms(
        $this,
        $this->serviceName,
        'rooms',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'rooms/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'rooms/{roomId}/decline',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'rooms/{roomId}/dismiss',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'rooms/{roomId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'join' => array(
              'path' => 'rooms/{roomId}/join',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'rooms/{roomId}/leave',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'rooms',
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
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'reportStatus' => array(
              'path' => 'rooms/{roomId}/reportstatus',
              'httpMethod' => 'POST',
              'parameters' => array(
                'roomId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->scores = new \Google\Service\Games\Resource\Scores(
        $this,
        $this->serviceName,
        'scores',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'players/{playerId}/leaderboards/{leaderboardId}/scores/{timeSpan}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'includeRankType' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
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
              ),
            ),'list' => array(
              'path' => 'leaderboards/{leaderboardId}/scores/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
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
              ),
            ),'listWindow' => array(
              'path' => 'leaderboards/{leaderboardId}/window/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'timeSpan' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'returnTopIfAbsent' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'resultsAbove' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submit' => array(
              'path' => 'leaderboards/{leaderboardId}/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'score' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'scoreTag' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'submitMultiple' => array(
              'path' => 'leaderboards/scores',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->turnBasedMatches = new \Google\Service\Games\Resource\TurnBasedMatches(
        $this,
        $this->serviceName,
        'turnBasedMatches',
        array(
          'methods' => array(
            'cancel' => array(
              'path' => 'turnbasedmatches/{matchId}/cancel',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'create' => array(
              'path' => 'turnbasedmatches/create',
              'httpMethod' => 'POST',
              'parameters' => array(
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'decline' => array(
              'path' => 'turnbasedmatches/{matchId}/decline',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'dismiss' => array(
              'path' => 'turnbasedmatches/{matchId}/dismiss',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'finish' => array(
              'path' => 'turnbasedmatches/{matchId}/finish',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'turnbasedmatches/{matchId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'join' => array(
              'path' => 'turnbasedmatches/{matchId}/join',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leave' => array(
              'path' => 'turnbasedmatches/{matchId}/leave',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'leaveTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/leaveTurn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'matchVersion' => array(
                  'location' => 'query',
                  'type' => 'integer',
                  'required' => true,
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pendingParticipantId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'turnbasedmatches',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'rematch' => array(
              'path' => 'turnbasedmatches/{matchId}/rematch',
              'httpMethod' => 'POST',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'requestId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'sync' => array(
              'path' => 'turnbasedmatches/sync',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxCompletedMatches' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'language' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeMatchData' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'takeTurn' => array(
              'path' => 'turnbasedmatches/{matchId}/turn',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'matchId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'language' => array(
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
