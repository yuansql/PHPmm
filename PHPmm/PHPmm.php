<?php


class PHPmm
{
    //框架运行方法
    public function run()
    {
        spl_autoload_register(array($this, 'load'));
        $url = $_SERVER['REQUEST_URI'];
        $_arr = explode('/', $url);
        $action = ucfirst($_arr[1]) . 'Action';
        if ($url === '/') {
            $action = 'IndexAction';
        }
        $actionObj = new  $action();
        $objClass = isset($_arr[2]) ? $_arr[2] : 'index';
        $actionObj->$objClass();
    }

    private function load($className)
    {
        if ($className === 'Action') {
            require Lib . '/core/' . $className . '.php';
        }
        if (strpos($className, 'Action') != false) {
            $_str = str_replace('Action', '', $className);
            require_once APP_PATH . 'App/Action/' . $_str . 'Action.php';
        }

    }
}
