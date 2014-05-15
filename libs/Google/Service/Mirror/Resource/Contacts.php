<?php 
namespace Google\Service\Mirror\Resource;
class Contacts extends \Google\Resource\Service
{

  /**
   * Deletes a contact. (contacts.delete)
   *
   * @param string $id
   * The ID of the contact.
   * @param array $optParams Optional parameters.
   */
  public function delete($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a single contact by ID. (contacts.get)
   *
   * @param string $id
   * The ID of the contact.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Contact
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Mirror\Contact');
  }
  /**
   * Inserts a new contact. (contacts.insert)
   *
   * @param Google_Contact $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Contact
   */
  public function insert(\Google\Service\Mirror\Contact $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Mirror\Contact');
  }
  /**
   * Retrieves a list of contacts for the authenticated user.
   * (contacts.listContacts)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\ContactsListResponse
   */
  public function listContacts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Mirror\ContactsListResponse');
  }
  /**
   * Updates a contact in place. This method supports patch semantics.
   * (contacts.patch)
   *
   * @param string $id
   * The ID of the contact.
   * @param Google_Contact $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Contact
   */
  public function patch($id, \Google\Service\Mirror\Contact $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Mirror\Contact');
  }
  /**
   * Updates a contact in place. (contacts.update)
   *
   * @param string $id
   * The ID of the contact.
   * @param Google_Contact $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Mirror\Contact
   */
  public function update($id, \Google\Service\Mirror\Contact $postBody, $optParams = array())
  {
    $params = array('id' => $id, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Mirror\Contact');
  }
}
