<?php
/***********************************************************************
 *          @Project    : WT FrameWork
 *          @version    : 1.1
 *          @author     : Mogbil Sourketti info[@]wondtech.com
 *          @copyright  : 2020 WondTech for Integrated Digital Solutions
 *          @link       : http://www.wondtech.com
 *          @package    : WT FrameWork (1.1) — Improved
 *
 ************************************************************************/

namespace WT;

use WT\LIBS\Wt_Front;

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

require_once 'wt' . DS . 'libs' . DS . 'wt_env.php';
$envPath = file_exists(__DIR__ . '/.env')
    ? __DIR__
    : dirname(__DIR__);
wt_loadEnv($envPath);

if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

require_once 'wt' . DS . 'libs' . DS . 'wt_conf.php';
require_once 'wt' . DS . 'libs' . DS . 'wt_auto.php';

(new Wt_Front())->dispatch();