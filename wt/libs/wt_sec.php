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


trait Wt_Sec {

    public function Wt_SecInt($get) {
        return intval($get);
    }

    public function Wt_SecStr($get) {
        return strval($get);
    }

    private function Wt_cleanString($string) {
        return $string = preg_replace('/[^a-zA-Z0-9-أ-ي٠-٩@._:\/ -]+/u',null, $string);
    }

    private function Wt_cleanInt($number) {
        return $number  = str_replace(['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨','٩'],
            ['0', '1', '2', '3', '4', '5', '6', '7', '8','9'], $number);
    }

    public function Wt_SecInput($input, $opt) {
        $input = trim($input);
        $input = $this->Wt_cleanString($input);
        $input = htmlspecialchars($input, ENT_QUOTES);
        switch($opt){
            case 'str'   : return htmlentities(strip_tags($input), ENT_QUOTES, 'UTF-8'); break;
            case 'int'   : return filter_var($this->Wt_cleanInt($input), FILTER_SANITIZE_NUMBER_INT); break;
            case 'flo'   : return filter_var($this->Wt_cleanInt($input), FILTER_SANITIZE_NUMBER_FLOAT); break;
            case 'email' : return filter_var($input, FILTER_VALIDATE_EMAIL); break;
        }
    }

    public function Wt_CrtCap() {
        $_SESSION['captcha'] = rand(111111, 999999);
        return $_SESSION['captcha'];
    }

    public function Wt_DrwCap() {
        ob_start();
        $captcha_code = $_SESSION['captcha'];
        $captcha_img  = imagecreate(75,37);
        imagecolorallocate($captcha_img, 40, 167, 69);
        $captcha_txt  = imagecolorallocate($captcha_img, 255,255,255);
        imagestring($captcha_img, 5, 10,10, $captcha_code, $captcha_txt);
        imagepng($captcha_img); imagedestroy($captcha_img);
        $img = base64_encode(ob_get_contents()); ob_end_clean();
        return $img;
    }

    private function Wt_Compress($source, $destination, $quality) {
        $info = getimagesize($source);
        if ($info['mime'] == 'image/jpeg')
            $image = imagecreatefromjpeg($source);
        elseif ($info['mime'] == 'image/gif')
            $image = imagecreatefromgif($source);
        elseif ($info['mime'] == 'image/png')
            $image = imagecreatefrompng($source);
        else return false;
        imagejpeg($image, $destination, $quality);
        return $destination;
    }

    public function Wt_PostImg($img){
        if (isset($img) && is_uploaded_file($img["tmp_name"])) {
            if (getimagesize($img['tmp_name'])){
                $image = addslashes($img['tmp_name']);
                $image = file_get_contents($this->Wt_Compress($image, $image, 50));
                $image = base64_encode($image);
                return $image;
            }
        }
    }

    function Wt_Encode($value) {
        if (!$value) return false;
        else{
            $key = sha1('WondTech@Sec');
            $strLen = strlen($value);
            $keyLen = strlen($key);
            $j = 0;
            $crypttext = '';

            for ($i = 0; $i < $strLen; $i++) {
                $ordStr = ord(substr($value, $i, 1));
                if ($j == $keyLen) $j = 0;
                $ordKey = ord(substr($key, $j, 1)); $j++;
                $crypttext .= strrev(base_convert(dechex($ordStr + $ordKey), 16, 36));
            } return $crypttext;
        }
    }

    function Wt_Decode($value) {
        if (!$value) return false;
        else{
            $key = sha1('WondTech@Sec');
            $strLen = strlen($value);
            $keyLen = strlen($key);
            $j = 0;
            $decrypttext = '';

            for ($i = 0; $i < $strLen; $i += 2) {
                $ordStr = hexdec(base_convert(strrev(substr($value, $i, 2)), 36, 16));
                if ($j == $keyLen) $j = 0;
                $ordKey = ord(substr($key, $j, 1)); $j++;
                $decrypttext .= chr($ordStr - $ordKey);
            } return $decrypttext;
        }
    }
}