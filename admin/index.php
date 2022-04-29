<?php
header("Content-type:text/html;charset=utf-8"); //设置框架编码
ini_set("date.timezone", "Asia/Shanghai");//设置 时间区域
const APP_PATH = __DIR__ . '/';//定义我们的项 目路径常量
const Lib = '../PHPmm/';//定义我们的框架目录常量
const Resource = APP_PATH . 'Resource';//定义 我们的项目资源目录常量

ini_set('display_errors', 1);//是否抛出错误
/**
 * display_errors介绍：错误回显，一般常用语开发 模式，但是很多应用在正式环境中也忘记了关闭 此选项。错误回显可以暴露出非常多的敏感信息， 为攻击者下一步攻击提供便利。推荐关闭此选项。 display_errors = On 开启状原南，若出现错误， 则报错，出现错误提示 dispaly_errors = Off 关闭 状态下，若出现错误，则提示：服务器错误。但 是不会出现错误提示**/
require Lib . 'PHPmm.php';
//运行框架行为
$app = new  PHPmm();
$app->run();
$app = null;
