<?php 
namespace Google\Service\Games;
class RoomLeaveRequest extends \Google\Model
{
  public $kind;
  protected $leaveDiagnosticsType = 'Google\Service\Games\RoomLeaveDiagnostics';
  protected $leaveDiagnosticsDataType = '';
  public $reason;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaveDiagnostics(\Google\Service\Games\RoomLeaveDiagnostics $leaveDiagnostics)
  {
    $this->leaveDiagnostics = $leaveDiagnostics;
  }

  public function getLeaveDiagnostics()
  {
    return $this->leaveDiagnostics;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReason()
  {
    return $this->reason;
  }
}
