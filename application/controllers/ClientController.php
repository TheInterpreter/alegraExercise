<?php

class ClientController extends Zend_Controller_Action
{

    public function init()
    {
        // $this->getHelper('ViewRenderer')->setNoRender(true);
    // $this->redirect('ClientController');
    //    $contactModel = new Application_Model_Contact();
    //      $infoJson = $contactModel->getContactList();    
    //      $infoPhp = json_decode($infoJson, true);
    //      $name = $infoPhp['name'];
    // $layout = $this->_helper->layout();
    //     echo "<script>alert('contactos: ".$infoJson." eeeexito!');</script>";
    // $validator = new Zend_Validate_EmailAddress();
    // if ($validator->isValid($email)) {
    //     // email appears to be valid
    // } else {
    //     // email is invalid; print the reasons
    //     foreach ($validator->getMessages() as $message) {
    //         echo "$message\n";
    //     }
    // }    

    }


    public function clientAction()
    {
        $layout = $this->_helper->layout();
    }

    public function editAction()
    {
        // action body
    }

}

