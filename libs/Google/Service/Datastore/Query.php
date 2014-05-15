<?php 
namespace Google\Service\Datastore;
class Query extends \Google\Collection
{
  public $endCursor;
  protected $filterType = 'Google\Service\Datastore\Filter';
  protected $filterDataType = '';
  protected $groupByType = 'Google\Service\Datastore\PropertyReference';
  protected $groupByDataType = 'array';
  protected $kindsType = 'Google\Service\Datastore\KindExpression';
  protected $kindsDataType = 'array';
  public $limit;
  public $offset;
  protected $orderType = 'Google\Service\Datastore\PropertyOrder';
  protected $orderDataType = 'array';
  protected $projectionType = 'Google\Service\Datastore\PropertyExpression';
  protected $projectionDataType = 'array';
  public $startCursor;

  public function setEndCursor($endCursor)
  {
    $this->endCursor = $endCursor;
  }

  public function getEndCursor()
  {
    return $this->endCursor;
  }

  public function setFilter(\Google\Service\Datastore\Filter $filter)
  {
    $this->filter = $filter;
  }

  public function getFilter()
  {
    return $this->filter;
  }

  public function setGroupBy($groupBy)
  {
    $this->groupBy = $groupBy;
  }

  public function getGroupBy()
  {
    return $this->groupBy;
  }

  public function setKinds($kinds)
  {
    $this->kinds = $kinds;
  }

  public function getKinds()
  {
    return $this->kinds;
  }

  public function setLimit($limit)
  {
    $this->limit = $limit;
  }

  public function getLimit()
  {
    return $this->limit;
  }

  public function setOffset($offset)
  {
    $this->offset = $offset;
  }

  public function getOffset()
  {
    return $this->offset;
  }

  public function setOrder($order)
  {
    $this->order = $order;
  }

  public function getOrder()
  {
    return $this->order;
  }

  public function setProjection($projection)
  {
    $this->projection = $projection;
  }

  public function getProjection()
  {
    return $this->projection;
  }

  public function setStartCursor($startCursor)
  {
    $this->startCursor = $startCursor;
  }

  public function getStartCursor()
  {
    return $this->startCursor;
  }
}
