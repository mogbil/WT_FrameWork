<?php
/***********************************************************************
# *          @Project    : WT Insurance
# *          @version    : 0.1
# *          @author     : Mogbil Sourketti info[@]wondtech.com
# *          @copyright  : 2020 WondTech for Integrated Digital Solutions
# *          @link       : http://www.wondtech.com
# *          @package    : WT FrameWork (0.1)
# ************************************************************************/

namespace WT\Models;

use WT\LIBS\Wt_Model;

class Cars_Model extends Wt_Model {

    public $c_id, $u_id, $c_manufacturer, $c_model, $c_year, $c_wheelDrive, $c_cylinder, $c_seats, $c_doors, $c_license;

    protected static $tableName = 'cars';
    protected static $pKey = 'c_id';

    public function __construct(){}

    protected static $tableSchema = array(
        'u_id'              => self::DATA_TYPE_INT,
        'c_manufacturer'    => self::DATA_TYPE_STR,
        'c_model'           => self::DATA_TYPE_STR,
        'c_year'            => self::DATA_TYPE_INT,
        'c_wheelDrive'      => self::DATA_TYPE_STR,
        'c_cylinder'        => self::DATA_TYPE_INT,
        'c_seats'           => self::DATA_TYPE_INT,
        'c_doors'           => self::DATA_TYPE_INT,
        'c_license'         => self::DATA_TYPE_FIL
    );
}