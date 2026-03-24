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

class Wt_Front
{
    const NOT_FOUND_ACTION     = 'NotFoundAction';
    const NOT_FOUND_CONTROLLER = 'WT\Controllers\NotFound_Controller';

    private string $controller = 'index';
    private string $action     = 'default';
    private array  $params     = [];

    public function __construct()
    {
        $this->parseUrl();
    }

    private function parseUrl(): void
    {
        $basePath = dirname($_SERVER['SCRIPT_NAME']);
        $path     = substr(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            strlen($basePath)
        );
        $url = explode('/', trim($path, '/'), 3);
        if (!empty($url[0])) {
            $this->controller = preg_replace('/[^a-zA-Z0-9_-]/', '', $url[0]);
        }
        if (!empty($url[1])) {
            $this->action = preg_replace('/[^a-zA-Z0-9_-]/', '', $url[1]);
        }
        if (!empty($url[2])) {
            $this->params = array_map(
                fn($p) => preg_replace('/[^a-zA-Z0-9_-]/', '', $p),
                explode('/', $url[2])
            );
        }
    }

    public function dispatch(): void
    {
        $controllerClassName = 'WT\Controllers\\' . ucfirst($this->controller) . '_Controller';
        $actionName          = $this->action . '_Action';
        if (
            !class_exists($controllerClassName) ||
            !is_subclass_of($controllerClassName, Wt_Controller::class)
        ) {
            $controllerClassName = self::NOT_FOUND_CONTROLLER;
        }
        $controller = new $controllerClassName();
        if (!method_exists($controller, $actionName)) {
            $this->action = $actionName = self::NOT_FOUND_ACTION;
        }
        $controller->setController($this->controller);
        $controller->setAction($this->action);
        $controller->setParams($this->params);
        $controller->$actionName();
    }
}