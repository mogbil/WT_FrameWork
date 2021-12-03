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

class AutoLoad {
    public static function autoload($className){
        $className = str_replace('WT' , '', $className);
        $className = str_replace('\\' , '/', $className);
        $className = strtolower($className);
        $className = $className.'.php';
        if(file_exists(APP_PATH.DS.$className)) require_once APP_PATH.DS.$className;
    }
}
spl_autoload_register(__NAMESPACE__.'\AutoLoad::autoload');