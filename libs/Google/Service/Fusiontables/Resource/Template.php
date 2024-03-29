<?php 
namespace Google\Service\Fusiontables\Resource;
class Template extends \Google\Resource\Service
{

  /**
   * Deletes a template (template.delete)
   *
   * @param string $tableId
   * Table from which the template is being deleted
   * @param int $templateId
   * Identifier for the template which is being deleted
   * @param array $optParams Optional parameters.
   */
  public function delete($tableId, $templateId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a specific template by its id (template.get)
   *
   * @param string $tableId
   * Table to which the template belongs
   * @param int $templateId
   * Identifier for the template that is being requested
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Template
   */
  public function get($tableId, $templateId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Fusiontables\Template');
  }
  /**
   * Creates a new template for the table. (template.insert)
   *
   * @param string $tableId
   * Table for which a new template is being created
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Template
   */
  public function insert($tableId, \Google\Service\Fusiontables\Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Fusiontables\Template');
  }
  /**
   * Retrieves a list of templates. (template.listTemplate)
   *
   * @param string $tableId
   * Identifier for the table whose templates are being requested
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Continuation token specifying which results page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of templates to return. Optional. Default is 5.
   * @return \Google\Service\Fusiontables\TemplateList
   */
  public function listTemplate($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Fusiontables\TemplateList');
  }
  /**
   * Updates an existing template. This method supports patch semantics.
   * (template.patch)
   *
   * @param string $tableId
   * Table to which the updated template belongs
   * @param int $templateId
   * Identifier for the template that is being updated
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Template
   */
  public function patch($tableId, $templateId, \Google\Service\Fusiontables\Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Fusiontables\Template');
  }
  /**
   * Updates an existing template (template.update)
   *
   * @param string $tableId
   * Table to which the updated template belongs
   * @param int $templateId
   * Identifier for the template that is being updated
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Fusiontables\Template
   */
  public function update($tableId, $templateId, \Google\Service\Fusiontables\Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Fusiontables\Template');
  }
}
