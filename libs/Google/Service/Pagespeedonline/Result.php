<?php 
namespace Google\Service\Pagespeedonline;
class Result extends \Google\Collection
{
  protected $formattedResultsType = 'Google\Service\Pagespeedonline\ResultFormattedResults';
  protected $formattedResultsDataType = '';
  public $id;
  public $invalidRules;
  public $kind;
  protected $pageStatsType = 'Google\Service\Pagespeedonline\ResultPageStats';
  protected $pageStatsDataType = '';
  public $responseCode;
  public $score;
  protected $screenshotType = 'Google\Service\Pagespeedonline\ResultScreenshot';
  protected $screenshotDataType = '';
  public $title;
  protected $versionType = 'Google\Service\Pagespeedonline\ResultVersion';
  protected $versionDataType = '';

  public function setFormattedResults(\Google\Service\Pagespeedonline\ResultFormattedResults $formattedResults)
  {
    $this->formattedResults = $formattedResults;
  }

  public function getFormattedResults()
  {
    return $this->formattedResults;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInvalidRules($invalidRules)
  {
    $this->invalidRules = $invalidRules;
  }

  public function getInvalidRules()
  {
    return $this->invalidRules;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPageStats(\Google\Service\Pagespeedonline\ResultPageStats $pageStats)
  {
    $this->pageStats = $pageStats;
  }

  public function getPageStats()
  {
    return $this->pageStats;
  }

  public function setResponseCode($responseCode)
  {
    $this->responseCode = $responseCode;
  }

  public function getResponseCode()
  {
    return $this->responseCode;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScreenshot(\Google\Service\Pagespeedonline\ResultScreenshot $screenshot)
  {
    $this->screenshot = $screenshot;
  }

  public function getScreenshot()
  {
    return $this->screenshot;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setVersion(\Google\Service\Pagespeedonline\ResultVersion $version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}
