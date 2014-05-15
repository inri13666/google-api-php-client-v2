<?php 
namespace Google\Service\DoubleClickBidManager;
class UploadLineItemsRequest extends \Google\Model
{
  public $dryRun;
  public $format;
  public $lineItems;

  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }

  public function getDryRun()
  {
    return $this->dryRun;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }

  public function getLineItems()
  {
    return $this->lineItems;
  }
}
