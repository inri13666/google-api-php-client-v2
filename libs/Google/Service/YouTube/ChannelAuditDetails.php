<?php 
namespace Google\Service\YouTube;
class ChannelAuditDetails extends \Google\Model
{
  public $communityGuidelinesGoodStanding;
  public $contentIdClaimsGoodStanding;
  public $copyrightStrikesGoodStanding;
  public $overallGoodStanding;

  public function setCommunityGuidelinesGoodStanding($communityGuidelinesGoodStanding)
  {
    $this->communityGuidelinesGoodStanding = $communityGuidelinesGoodStanding;
  }

  public function getCommunityGuidelinesGoodStanding()
  {
    return $this->communityGuidelinesGoodStanding;
  }

  public function setContentIdClaimsGoodStanding($contentIdClaimsGoodStanding)
  {
    $this->contentIdClaimsGoodStanding = $contentIdClaimsGoodStanding;
  }

  public function getContentIdClaimsGoodStanding()
  {
    return $this->contentIdClaimsGoodStanding;
  }

  public function setCopyrightStrikesGoodStanding($copyrightStrikesGoodStanding)
  {
    $this->copyrightStrikesGoodStanding = $copyrightStrikesGoodStanding;
  }

  public function getCopyrightStrikesGoodStanding()
  {
    return $this->copyrightStrikesGoodStanding;
  }

  public function setOverallGoodStanding($overallGoodStanding)
  {
    $this->overallGoodStanding = $overallGoodStanding;
  }

  public function getOverallGoodStanding()
  {
    return $this->overallGoodStanding;
  }
}
