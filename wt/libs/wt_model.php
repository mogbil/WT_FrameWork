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

abstract class Wt_Model {

    const DATA_TYPE_INT     = \PDO::PARAM_INT;
    const DATA_TYPE_STR     = \PDO::PARAM_STR;
    const DATA_TYPE_FIL     = \PDO::PARAM_LOB;
    const DATA_TYPE_BOOL    = \PDO::PARAM_BOOL;

    public function __construct(){}

    private function prepareVaules($stmt){
        foreach (static::$tableSchema as $columName=>$type){
            $stmt->bindParam(":{$columName}",$this->$columName, $type);
        }
    }

    private static function buildNameParamSql(){
        $nameParam = '';
        foreach (static::$tableSchema as $columName=>$type){
            $nameParam .= $columName.' = :'.$columName.', ';
        } return trim($nameParam, ', ');
    }

    private function wt_insert($noUpdate=false){
        $PDO = (new Wt_DB())->getPDO();
        $sql = 'INSERT INTO '.static::$tableName.' SET '. self::buildNameParamSql();
        try {
            $stmt = $PDO->prepare($sql);
            $this->prepareVaules($stmt);
            if($noUpdate) return $stmt->execute();
            else{
                $stmt->execute();
                return $PDO->lastInsertId();
            }
        } catch (\PDOException $e){
            //Wt_Helper::Wt_GlbMsg('DataBase Error');
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    private function wt_update(){
        $PDO = (new Wt_DB())->getPDO();
        $sql = 'UPDATE '.static::$tableName.' SET '.self::buildNameParamSql().' WHERE '.static::$pKey.' = "'.$this->{static::$pKey}.'"';
        try{
            $stmt = $PDO->prepare($sql);
            $this->prepareVaules($stmt);
            return $stmt->execute();
        } catch (\PDOException $e){
            Wt_Helper::Wt_GlbMsg('DataBase Error');
        }
    }

    public function wt_save($noUpdate=false){
        return ($this->{static::$pKey} === null || $noUpdate) ? $this->wt_insert($noUpdate) : $this->wt_update();
    }

    public function wt_delete($str=false){
        $PDO = (new Wt_DB())->getPDO();
        $sql = 'DELETE FROM '.static::$tableName.' WHERE '.static::$pKey.' = :pKey';
        try {
            $stmt = $PDO->prepare($sql);
            if ($str)
                $stmt->bindParam(':pKey', $this->{static::$pKey}, self::DATA_TYPE_STR);
            else
                $stmt->bindParam(':pKey', $this->{static::$pKey}, self::DATA_TYPE_INT);
            return $stmt->execute();
        } catch (\PDOException $e){
            Wt_Helper::Wt_GlbMsg('DataBase Error');
        }
    }

    public static function wt_getByPkey($pKey, $str=false){
        $PDO = (new Wt_DB())->getPDO();
        $sql = 'SELECT * FROM '.static::$tableName.' WHERE '.static::$pKey.' = :pKey';
        try {
            $stmt = $PDO->prepare($sql);
            if ($str)
                $stmt->bindParam(':pKey', $pKey, self::DATA_TYPE_STR);
            else
                $stmt->bindParam(':pKey', $pKey, self::DATA_TYPE_INT);
            if($stmt->execute() === true){
                $results = $stmt->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, get_called_class(), array_keys(static::$tableSchema));
                return !empty($results) ? array_shift($results) : false;
            } return false;
        } catch (\PDOException $e){
            Wt_Helper::Wt_GlbMsg('DataBase Error');
        }
    }

    public static function wt_countData($SQL=null, $items=null){
        $PDO = (new Wt_DB())->getPDO();
        $sql = 'SELECT COUNT(*) FROM '.static::$tableName;
        if(!empty($SQL)) $sql = $sql.' '.$SQL;
        try {
            $stmt = $PDO->prepare($sql);
            $stmt->execute();
            return empty($items) ?  $stmt->fetchColumn() : ceil($stmt->fetchColumn()/$items);
        } catch (\PDOException $e){
            Wt_Helper::Wt_GlbMsg('DataBase Error');
        }
    }

    public static function wt_getData($SQL=null, $options=array(), $items=null, $page=null){
        $PDO = (new Wt_DB())->getPDO();
        $sql = 'SELECT * FROM '.static::$tableName;
        if (!empty($SQL))$sql = $sql.' '.$SQL;
        if (!empty($items)){
            $page = ($page == null) ? 0 : ($page*$items)-$items;
            $sql = $sql.' LIMIT '.$page.','.$items;
        }
        try {
            $stmt = $PDO->prepare($sql);
            if (!empty($options)){
                foreach ($options as $columName=>$type){
                    $type[1] == 4 ?
                        $stmt->bindParam(":{$columName}", $type[1]) :
                        $stmt->bindParam(":{$columName}", $type[1], $type[0]);
                }
            }
            $stmt->execute();
            $results = $stmt->fetchAll(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, get_called_class(), array_keys(static::$tableSchema));
            return (is_array($results) && !empty($results)) ? $results : false;
        } catch (\PDOException $e){
            Wt_Helper::Wt_GlbMsg('DataBase Error');
        }
    }

    public static function wt_pagination($items, $page=null, $SQL=null){
        $pages = self::wt_countData($SQL, $items);
        $results = self::wt_getData($SQL, null, $items, $page);
        return (!empty($pages) && !empty($results)) ? ['page'=>$page, 'pages'=>$pages, 'results' => $results] : false;
    }
}