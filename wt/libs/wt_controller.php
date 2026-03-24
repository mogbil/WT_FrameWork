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

use WT\LANG\Wt_Lang;

abstract class Wt_Controller
{
    protected ?Wt_Smarty $tpl        = null;
    protected array      $lang       = [];
    protected array      $params     = [];
    protected string     $action     = '';
    protected string     $controller = '';
    protected array      $actPages   = [
        'act_home', 'act_offers', 'act_orders',
        'act_customers', 'act_users', 'act_settings'
    ];

    public function setController(string $controllerName): void
    {
        $this->controller = $controllerName;
    }

    public function setAction(string $actionName): void
    {
        $this->action = $actionName;
    }

    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    public function NotFoundAction(): void
    {
        $this->view();
    }

    protected function view(?string $type = null): Wt_Smarty
    {
        $this->tpl  = new Wt_Smarty($type);
        $this->lang = (new Wt_Lang())->getLang();
        foreach ($this->lang as $key => $val) {
            $this->tpl->assign($key, $val);
        }
        foreach ($this->actPages as $actPage) {
            $this->tpl->assign($actPage, '');
        }
        $this->tpl->assign('params', $this->params);
        if ($this->action === Wt_Front::NOT_FOUND_ACTION) {
            $this->tpl->view('notfound.tpl');
        }

        return $this->tpl;
    }
}