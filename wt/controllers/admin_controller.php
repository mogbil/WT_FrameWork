<?php
/***********************************************************************
# *          @Project    : WT FrameWork
# *          @version    : 1.1
# *          @author     : Mogbil Sourketti info[@]wondtech.com
# *          @copyright  : 2020 WondTech for Integrated Digital Solutions
# *          @link       : http://www.wondtech.com
# *          @package    : WT FrameWork (1.1)
# ************************************************************************/

namespace WT\Controllers;

use WT\LIBS\Wt_Controller;

class Admin_Controller extends Wt_Controller {

    protected $_tpl         = 'admin';
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// Index Page
    public function Index_Action(){
        $tpl = $this->view($this->_tpl);
        $tpl->view('default.tpl');
    }
}
