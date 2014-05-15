<?php 
namespace Google\Service\Customsearch;
class SearchSpelling extends \Google\Model
{
  public $correctedQuery;
  public $htmlCorrectedQuery;

  public function setCorrectedQuery($correctedQuery)
  {
    $this->correctedQuery = $correctedQuery;
  }

  public function getCorrectedQuery()
  {
    return $this->correctedQuery;
  }

  public function setHtmlCorrectedQuery($htmlCorrectedQuery)
  {
    $this->htmlCorrectedQuery = $htmlCorrectedQuery;
  }

  public function getHtmlCorrectedQuery()
  {
    return $this->htmlCorrectedQuery;
  }
}
