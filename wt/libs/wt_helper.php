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

trait Wt_Helper
{
    public static function Wt_GetIP(): string|false
    {
        $headers = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'REMOTE_ADDR',
        ];
        foreach ($headers as $header) {
            if (!empty($_SERVER[$header])) {
                $ip = trim(explode(',', $_SERVER[$header])[0]);
                if (filter_var($ip, FILTER_VALIDATE_IP)) {
                    return $ip;
                }
            }
        }
        return false;
    }

    public function Wt_ReDir(?string $path = null, ?int $timer = null): void
    {
        session_write_close();

        if (empty($path)) {
            $path = $_SESSION['url'] ?? '/';
        }

        // منع Open Redirect — التحقق أن الـ URL داخلي فقط
        $parsedUrl  = parse_url($path);
        $parsedHost = $parsedUrl['host'] ?? null;
        $serverHost = $_SERVER['HTTP_HOST'] ?? '';

        if ($parsedHost && $parsedHost !== $serverHost) {
            $path = '/';
        }

        if ($timer) {
            header('refresh: ' . $timer . ';url=' . $path);
        } else {
            header('Location: ' . $path);
            exit;
        }
    }

    public function Wt_SecMsg(string $msg): string
    {
        $msg = htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
        return '<div class="alert alert-success alert-dismissible animated fadeIn">'
            . '<i class="fa fa-check-circle" aria-hidden="true"></i> '
            . $msg . '</div>';
    }

    public function Wt_WrMsg(string $msg): string
    {
        $msg = htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
        return '<div class="alert alert-warning alert-dismissible animated fadeIn">'
            . '<i class="fa fa-info-circle" aria-hidden="true"></i> '
            . $msg . '</div>';
    }

    public function Wt_ErMsg(string $msg): string
    {
        $msg = htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
        return '<div class="alert alert-danger alert-dismissible animated fadeIn">'
            . '<i class="fa fa-minus-circle" aria-hidden="true"></i> '
            . $msg . '</div>';
    }

    public static function Wt_GlbMsg(?string $msg = null): void
    {
        if (isset($_SESSION['captcha'])) {unset($_SESSION['captcha']);}

        if ($msg) {
            $msg     = htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
            $imgPath = '/pub_wt/imgs/admin/wt.png';

            echo '
            <div style="display:flex; justify-content:center; margin-top:20%">
                <div style="color:gray; text-align:center; background-color:whitesmoke;
                            padding:30px; width:50%; border:gray dotted 1px; border-radius:20px">
                    <img src="' . $imgPath . '" width="130px">
                    <h3>WT Framework</h3>
                    <h5>' . $msg . '</h5>
                </div>
            </div>';
            exit;
        }
    }
}