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

namespace WT\LIBS;

trait Wt_Send
{
    private string $appName;
    private string $gEmail;
    private string $sEmail;

    private function initMailConfig(): void
    {
        $this->appName = $_ENV['MAIL_APP_NAME']  ?? '';
        $this->gEmail  = $_ENV['MAIL_GET_EMAIL'] ?? '';
        $this->sEmail  = $_ENV['MAIL_SEND_EMAIL'] ?? '';
    }

    private function buildHeaders(string $fromName, string $fromEmail): string
    {
        // تنظيف من Header Injection
        $fromName  = str_replace(["\r", "\n"], '', $fromName);
        $fromEmail = str_replace(["\r", "\n"], '', $fromEmail);
        $from      = $fromName . '<' . $fromEmail . '>';

        return implode("\r\n", [
            'MIME-Version: 1.0',
            'Content-type: text/html; charset=UTF-8',
            'From: '     . $from,
            'Reply-To: ' . $from,
            'X-Mailer: PHP/' . phpversion(),
        ]);
    }

    public function Wt_GetEmail(
        string $senderName,
        string $senderEmail,
        string $subject,
        string $message
    ): bool {
        $this->initMailConfig();

        if (!filter_var($senderEmail, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        // تنظيف من Header Injection
        $subject = str_replace(["\r", "\n"], '', $subject);

        $headers = $this->buildHeaders($senderName, $senderEmail);

        return mail($this->gEmail, $subject, $message, $headers);
    }

    public function Wt_SendEmail(
        string $to,
        string $subject,
        string $message
    ): bool {
        $this->initMailConfig();

        if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        // تنظيف من Header Injection
        $subject = str_replace(["\r", "\n"], '', $subject);

        $headers = $this->buildHeaders($this->appName, $this->sEmail);

        return mail($to, $subject, $message, $headers);
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