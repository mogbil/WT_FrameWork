<?php
/***********************************************************************
# *          @Project    : WT FrameWork
# *          @version    : 0.1
# *          @author     : Mogbil Sourketti info[@]wondtech.com
# *          @copyright  : 2020 WondTech for Integrated Digital Solutions
# *          @link       : http://www.wondtech.com
# *          @package    : WT FrameWork (0.1)
# ************************************************************************/

namespace WT\LIBS;

class Wt_Front{

    const NOT_FOUND_ACTION = 'NotFoundAction';
    const NOT_FOUND_CONTROLLER = 'WT\Controllers\NotFound_Controller';

    private $_controller = 'index';
    private $_action = 'default';
    private $_params = array();

    function __construct(){
        $this->_parseUrl();
    }

    private function _parseUrl(){
        $url = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 4);
        if(isset($url[1]) && $url[1] != '') $this->_controller = $url[1];
        if(isset($url[2]) && $url[2] != '') $this->_action = $url[2];
        if(isset($url[3]) && $url[3] != '') $this->_params = explode('/', $url[3]);
     }

    public function dispatch(){
        $controllerClassName = 'WT\Controllers\\'.ucfirst($this->_controller).'_Controller';
        $actionName = $this->_action.'_Action';

        if(!class_exists($controllerClassName))
            $controllerClassName = self::NOT_FOUND_CONTROLLER;

        $controller = new $controllerClassName();

        if(!method_exists($controller, $actionName))
            $this->_action = $actionName = self::NOT_FOUND_ACTION;

        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->$actionName();
    }
}