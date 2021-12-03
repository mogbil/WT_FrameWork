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

trait Wt_Send{

    public function Wt_GetEmail($info, $from, $subject, $message){
        $set = Setting_Model::wt_getByPkey(1);
        $email_from = $from;
        $full_name  = $info;
        $from_mail  = $full_name.'<'.$email_from.'>';
        $from       = $from_mail;
        $headers    = "" .
            "Reply-To:" . $from . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $headers    .= 'MIME-Version: 1.0' . "\r\n";
        $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers    .= 'From: ' . $from . "\r\n";
        mail($set->email, $subject, $message, $headers);
    }

    public function Wt_SendEmail($to, $subject, $message){
        $set = Setting_Model::wt_getByPkey(1);
        $email_from = $set->email;
        $full_name  = $set->enName.'-'.$set->arName;
        $from_mail  = $full_name.'<'.$email_from.'>';
        $from       = $from_mail;
        $headers    = "" .
            "Reply-To:" . $from . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $headers    .= 'MIME-Version: 1.0' . "\r\n";
        $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers    .= 'From: ' . $from . "\r\n";
        mail($to, $subject, $message, $headers);
    }

    public function Wt_SendSms($mobile, $msg){
        function PostRequest($url, $referer, $_data){
            $smsData = array();
            while(list($n,$v) = each($_data)){
                $smsData[] = "$n=$v";
            }
            $smsData = implode('&', $smsData);
            $url = parse_url($url);
            if ($url['scheme'] != 'http'){
                die('Only HTTP request are supported !');
            }
            $host = $url['host'];
            $path = $url['path'];
            $fp = fsockopen($host, 80);
            fputs($fp, "POST $path HTTP/1.1\r\n");
            fputs($fp, "Host: $host\r\n");
            fputs($fp, "Referer: $referer\r\n");
            fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
            fputs($fp, "Content-length: ". strlen($smsData) ."\r\n");
            fputs($fp, "Connection: close\r\n\r\n");
            fputs($fp, $smsData);
            $result = '';
            while(!feof($fp)){
                $result .= fgets($fp, 128);
            }
            fclose($fp);
            $result = explode("\r\n\r\n", $result, 2);
            $header = isset($result[0]) ? $result[0] : '';
            $content = isset($result[1]) ? $result[1] : '';
            return array($header, $content);
        }
        $smsData = array(
            'user'      => "ppnts",
            'password'  => "ppnts@!",
            'msisdn'    => $mobile,
            'sid'       => "PPNTS",
            'msg'       => $msg,
            'fl'        =>"0",
        );
        list($header, $content) = PostRequest("https://sms.wondtech.com/vendorsms/pushsms.aspx?user=abc&password=xyz&msisdn=966556xxxxxx&sid=SenderId&msg=test%20message&fl=0", "", $smsData);
        //echo $content;
    }
}