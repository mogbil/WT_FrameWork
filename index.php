<?php
/***********************************************************************
# *          @Project    : WT FrameWork
# *          @version    : 0.1
# *          @author     : Mogbil Sourketti info[@]wondtech.com
# *          @copyright  : 2020 WondTech for Integrated Digital Solutions
# *          @link       : http://www.wondtech.com
# *          @package    : WT FrameWork (0.1)
# ************************************************************************/

namespace WT;

use WT\LIBS\Wt_Front;

if (session_status() !== PHP_SESSION_ACTIVE){session_start();}

if(!defined('DS'))define('DS', DIRECTORY_SEPARATOR);
require_once 'wt' . DS . 'libs' . DS . 'wt_config.php';
require_once 'wt' . DS . 'libs' . DS . 'wt_auto.php';
require_once 'wt' . DS . 'smarty' . DS . 'auto.php';

\Smarty_Autoloader::register();
(new Wt_Front())->dispatch();