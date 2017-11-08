<?php
/**
 * Application.php
 *
 */
namespace Pails;

abstract class Application extends \Phalcon\Mvc\Application
{
    protected $_providers = [];

    public function boot()
    {
        // 注入应用级的服务
        $this->di->registerServices($this->_providers);

        // 禁用视图
        $this->useImplicitView(false);

        return $this;
    }
}
