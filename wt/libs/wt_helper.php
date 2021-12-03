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

trait Wt_Helper {

    function Wt_GetIP() {
        $client  = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : false;
        $forward = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : false;
        $remote  = isset($_SERVER['REMOTE_ADDR']) ?  $_SERVER['REMOTE_ADDR'] : false;

        if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
        elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
        else $ip = $remote;
        return $ip;
    }

    public function Wt_ReDir($path=null, $timer=null) {
        session_write_close();
        if(empty($path)) $path=$_SESSION['url'];
        if ($timer) header('refresh: ' . $timer . ';url=' . $path);
        else { header('Location: ' . $path); exit; }
    }

    public function Wt_SecMsg($msg) {
        return '<div class="alert alert-success alert-dismissible animated fadeIn"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-check-circle" aria-hidden="true"></i> '.$msg.'</div>';
    }

    public function Wt_WrMsg($msg) {
        return '<div class="alert alert-warning alert-dismissible animated fadeIn"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-info-circle" aria-hidden="true"></i> '.$msg.'</div>';
    }

    public function Wt_ErMsg($msg) {
        return '<div class="alert alert-danger alert-dismissible animated fadeIn"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-minus-circle" aria-hidden="true"></i> '.$msg.'</div>';
    }

    public static function Wt_GlbMsg($msg=null) {
        if(isset($_SESSION['captcha'])) unset($_SESSION['captcha']);
        if ($msg) {
            echo '<div style="display: flex; justify-content: center; margin-top: 20%">
                    <div style="color: gray; text-align: center; background-color: whitesmoke; padding: 30px;
                        width: 50%; border: gray dotted 1px; border-radius: 20px">
                    <img src="/pub_wt/imgs/admin/wt.png" width="130px">
                    <h3>WT Framework</h3>
                <h5>'.$msg.'</h5></div></div>'; exit;
        }
    }
}