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

use WT\LANG\Wt_Lang;

abstract class Wt_Controller{

    protected $_tpl;
    protected $_lang;
    protected $_params;
    protected $_action;
    protected $_controller;

    public function NotFoundAction(){
        $this->_view();
    }

    public function setController($controllerName){
        $this->_controller = $controllerName;
    }

    public function setAction($actionName){
        $this->_action = $actionName;
    }

    public function setParams($params){
        $this->_params = $params;
    }

    public function _view($type=null){
        $this->_tpl = new Wt_Smarty($type);
        $this->_lang = (new Wt_Lang())->getLang();
        foreach ($this->_lang as $lang => $val) 
            $this->_tpl->assign($lang, $val);
        if ($this->_controller == Wt_Front::NOT_FOUND_CONTROLLER
            || $this->_action == Wt_Front::NOT_FOUND_ACTION){
            $this->_tpl->view('notfound.tpl');
        }else return $this->_tpl;
    }
}