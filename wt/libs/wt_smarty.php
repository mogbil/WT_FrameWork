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

require_once __DIR__ . '/smarty/Autoloader.php';
\Smarty_Autoloader::register();

class Wt_Smarty extends \Smarty
{
    public function __construct(?string $type = null)
    {
        parent::__construct();

        $templateDir = match($type) {
            'admin' => ADMIN_TEMPLATE_PATH,
            default => TEMPLATE_PATH,
        };
        $this->setTemplateDir($templateDir);
        $this->ensureDir(TEMP_C);
        $this->ensureDir(TEMP_CONF);
        $this->ensureDir(TEMP_CACHE);
        $this->setCompileDir(TEMP_C);
        $this->setConfigDir(TEMP_CONF);
        $this->setCacheDir(TEMP_CACHE);
        if ($_ENV['APP_CACHE'] === 'true') {
            $this->setCaching(\Smarty::CACHING_LIFETIME_CURRENT);
        }
        $allowedLangs = ['EN', 'AR'];
        $lang         = $_GET['lang'] ?? null;
        if ($lang && in_array($lang, $allowedLangs, true)) {
            $_SESSION['lang'] = $lang;
        }
    }
    public function view(string $tplFile): void
    {
        try {
            ob_start();
            $this->display($tplFile);
            $html = ob_get_clean();
            $html = preg_replace('/<!--(?!\[if).*?-->/s', '', $html);
            $html = preg_replace('/>\s+</', '><', $html);
            $html = preg_replace('/\s+/', ' ', $html);
            echo trim($html);
        } catch (\SmartyException $e) {
            error_log('[Wt_Smarty] SmartyException: ' . $e->getMessage());
            exit;
        } catch (\Exception $e) {
            error_log('[Wt_Smarty] Exception: ' . $e->getMessage());
            exit;
        }
    }
    private function ensureDir(string $path): void
    {
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }
    }
}