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

use WT\Models\Setting_Model;
use WT\Models\Categories_Model;

class Wt_Smarty extends \Smarty {

    function __construct($type=null){
        parent::__construct();
        switch($type){
            case 'admin'  :
                $this->setTemplateDir(ADMIN_TEMPLATE_PATH); break;
            default       :
                $this->setTemplateDir(TEMPLATE_PATH);
        }
        $this->setCompileDir(TEMP_C);
        $this->setConfigDir(TEMP_CONF);
        $this->setCacheDir(TEMP_CACHE);
        $this->loadFilter('output', 'trimwhitespace');
        //$this->setCaching(\Smarty::CACHING_LIFETIME_CURRENT);
        if(isset($_GET['lang']) && $_GET['lang'] == 'EN') $_SESSION['lang'] = 'EN';
        if(isset($_GET['lang']) && $_GET['lang'] == 'AR') $_SESSION['lang'] = 'AR';
    }

    function view($tplFile){
        try {$this->display($tplFile);}
        catch (\SmartyException $e){exit;}
        catch (\Exception $e){exit;}
    }
}