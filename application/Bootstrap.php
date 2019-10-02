<?php
// the Bootstrap class defines WHAT RESOURCES AND COMPONENTS to initialize 
// By default, Front Controller is initialized at application/controllers/
// the viewRenderer is set on as default
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initView()
    {
        // retorna una vista generada por Zend (a menos de que sea indicado 'disabled' en los controladores)
        $view = new Zend_view();
        $view->doctype('XHTML1_STRICT');
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
        // $viewRenderer->setView($view);
        // return $view;
        Zend_Registry::set('username', 'jo.an.pereira@outlook.com');
        Zend_Registry::set('token', '7b1535aa1ca490a617e2');
        return $view;  
    }
             
}

