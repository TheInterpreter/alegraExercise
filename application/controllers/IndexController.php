<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        //este nene que está acá es el que hace que me redireccione
        //a las vistas (INDEX) en cliente, y no al indexview 
        // $this->getHelper('Layout')->disableLayout();
        // $this->getHelper('ViewRenderer')->setNoRender(true);
    // $this->redirect('ClientController');
    //    $contactModel = new Application_Model_Contact();
    //      $infoJson = $contactModel->getContactList();    
    //      $infoPhp = json_decode($infoJson, true);
    //      $name = $infoPhp['name'];
    
    //     echo "<script>alert('contactos: ".$infoJson." eeeexito!');</script>";
    }

    public function indexAction()
    {
        // action body
    }

    public function editAction()
    {
        // action body
    }

}

