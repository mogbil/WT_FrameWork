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

class Wt_DB {

    private $localHost = "127.0.0.1";
    private $dbName = "bw_insurance";
    private $usreName = "root";
    private $passWord = "";
    private $pdo = null;

    public function getPdo(){
        return $this->pdo;
    }

    public function __construct(){
        try {
            if($this->pdo === null){
                $this->pdo = new \PDO('mysql:host=' . $this->localHost . ';dbname=' . $this->dbName . ';charset=utf8', $this->usreName, $this->passWord);
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }
        }
        catch(\PDOException $e){
            switch ($e->getCode()){
                case 1044 : Wt_Helper::Wt_GlbMsg('Check DataBase Username'); break;
                case 1045 : Wt_Helper::Wt_GlbMsg('Check DataBase Password'); break;
                case 1049 : Wt_Helper::Wt_GlbMsg('Check DataBase Name'); break;
                case 2002 : Wt_Helper::Wt_GlbMsg('DataBase Connection Refused'); break;
                default : Wt_Helper::Wt_GlbMsg('DataBase Connection Error');
            }
        }
    }
}