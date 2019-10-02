<?php

class RestController extends Zend_Controller_Action
{

  public function init()
  {
    $this->_helper->layout()->disableLayout();
    $this->_helper->viewRenderer->setNoRender(true);
  }

  public function indexAction()
  {
    $contactModel = new Application_Model_Contact();
    var_dump("aqui 1");
    //echo $contactModel->getContactList();
  }

  public function getAction()
  {
    $id = $this->getRequest()->getParam('id');

    $contactModel = new Application_Model_Contact();
    echo $contactModel->getContact($id);
    
  }
  
  //create address
  public function postAction()
  {
    $body = $this->getRequest()->getPost();

    // creating contact
    $contact = json_encode($body);
    $contactModel = new Application_Model_Contact();
    $contactModel->createContact($contact);

    return $this->redirect('/client');
  }

// update
  public function putAction()
  {


    $id = $this->getRequest()->getParam('id');

    //$body = $this->getRequest()->getPost();
    $body = $this->getRequest()->getPut();
    
    var_dump("es un update");
    var_dump($body);
    die();

    $city = $body["city"];
    $address1 = $body["addresss"];
    $address2 = array(
		    'address' => $address1,
		    'city' => $city
		  );

    $body['address'] = $address2;
    
    $contact = json_encode($body);
    $contactModel = new Application_Model_Contact();
    $contactModel->editContact($id, $contact);

    return $this->redirect('/client');
  }

  //delete
  public function deleteAction()
  {
    var_dump("es un delte");
    var_dump($body);
    die();

    $id = $this->getRequest()->getParam('id');
    $contactModel = new Application_Model_Contact();
    $contactModel->deleteContact($id);

    return $this->redirect('/client');
  }

}
