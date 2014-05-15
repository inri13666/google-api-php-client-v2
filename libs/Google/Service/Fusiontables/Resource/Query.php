<?php 
namespace Google\Service\Fusiontables\Resource;
class Query extends \Google\Resource\Service
{

  /**
   * Executes an SQL SELECT/INSERT/UPDATE/DELETE/SHOW/DESCRIBE/CREATE statement.
   * (query.sql)
   *
   * @param string $sql
   * An SQL SELECT/SHOW/DESCRIBE/INSERT/UPDATE/DELETE/CREATE statement.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool typed
   * Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed
    * geometries for KML values? Default is true.
   * @opt_param bool hdrs
   * Should column names be included (in the first row)?. Default is true.
   * @return \Google\Service\Fusiontables\Sqlresponse
   */
  public function sql($sql, $optParams = array())
  {
    $params = array('sql' => $sql);
    $params = array_merge($params, $optParams);
    return $this->call('sql', array($params), 'Google\Service\Fusiontables\Sqlresponse');
  }
  /**
   * Executes an SQL SELECT/SHOW/DESCRIBE statement. (query.sqlGet)
   *
   * @param string $sql
   * An SQL SELECT/SHOW/DESCRIBE statement.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool typed
   * Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed
    * geometries for KML values? Default is true.
   * @opt_param bool hdrs
   * Should column names be included (in the first row)?. Default is true.
   * @return \Google\Service\Fusiontables\Sqlresponse
   */
  public function sqlGet($sql, $optParams = array())
  {
    $params = array('sql' => $sql);
    $params = array_merge($params, $optParams);
    return $this->call('sqlGet', array($params), 'Google\Service\Fusiontables\Sqlresponse');
  }
}
