<?php 
namespace Google\Service;
class GamesManagement extends \Google\Service
{
  /** Share your Google+ profile information and view and manage your game activity. */
  const GAMES = "https://www.googleapis.com/auth/games";
  /** Know your basic profile info and list of people in your circles.. */
  const PLUS_LOGIN = "https://www.googleapis.com/auth/plus.login";

  public $achievements;
  public $applications;
  public $players;
  public $rooms;
  public $scores;
  public $turnBasedMatches;
  

  /**
   * Constructs the internal representation of the GamesManagement service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'games/v1management/';
    $this->version = 'v1management';
    $this->serviceName = 'gamesManagement';

    $this->achievements = new \Google\Service\GamesManagement\Resource\Achievements(
        $this,
        $this->serviceName,
        'achievements',
        array(
          'methods' => array(
            'reset' => array(
              'path' => 'achievements/{achievementId}/reset',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'resetAll' => array(
              'path' => 'achievements/reset',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'resetForAllPlayers' => array(
              'path' => 'achievements/{achievementId}/resetForAllPlayers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'achievementId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->applications = new \Google\Service\GamesManagement\Resource\Applications(
        $this,
        $this->serviceName,
        'applications',
        array(
          'methods' => array(
            'listHidden' => array(
              'path' => 'applications/{applicationId}/players/hidden',
              'httpMethod' => 'GET',
              'parameters' => array(
                'applicationId' => array(
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
    $this->players = new \Google\Service\GamesManagement\Resource\Players(
        $this,
        $this->serviceName,
        'players',
        array(
          'methods' => array(
            'hide' => array(
              'path' => 'applications/{applicationId}/players/hidden/{playerId}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'unhide' => array(
              'path' => 'applications/{applicationId}/players/hidden/{playerId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'applicationId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'playerId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->rooms = new \Google\Service\GamesManagement\Resource\Rooms(
        $this,
        $this->serviceName,
        'rooms',
        array(
          'methods' => array(
            'reset' => array(
              'path' => 'rooms/reset',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
    $this->scores = new \Google\Service\GamesManagement\Resource\Scores(
        $this,
        $this->serviceName,
        'scores',
        array(
          'methods' => array(
            'reset' => array(
              'path' => 'leaderboards/{leaderboardId}/scores/reset',
              'httpMethod' => 'POST',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'resetForAllPlayers' => array(
              'path' => 'leaderboards/{leaderboardId}/scores/resetForAllPlayers',
              'httpMethod' => 'POST',
              'parameters' => array(
                'leaderboardId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->turnBasedMatches = new \Google\Service\GamesManagement\Resource\TurnBasedMatches(
        $this,
        $this->serviceName,
        'turnBasedMatches',
        array(
          'methods' => array(
            'reset' => array(
              'path' => 'turnbasedmatches/reset',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
