<?php
/***********************************************************************
# *          @Project    : WT FrameWork
# *          @version    : 0.1
# *          @author     : Mogbil Sourketti info[@]wondtech.com
# *          @copyright  : 2020 WondTech for Integrated Digital Solutions
# *          @link       : http://www.wondtech.com
# *          @package    : WT FrameWork (0.1)
# ************************************************************************/
namespace WT\LANG;

class Wt_Lang {

    public function getLang(){
        if(isset($_SESSION['lang'])){
            if($_SESSION['lang']=='AR')
                 return (new Wt_AR())->getAr();
            else return (new Wt_EN())->getEn();
        } else return (new Wt_AR())->getAr();
    }
}