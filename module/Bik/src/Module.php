<?php
/**
 * Created by PhpStorm.
 * User: qwerty123
 * Date: 18.04.18
 * Time: 9:10
 */
namespace Bik;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface{

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

}