<?php
namespace Data;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    public function getServiceConfig()
    {
        return [
            'factories'=>[
                Model\FlowerTable::class=>function($container){
                $tableGateway=$container->get(Model\FlowerTableGateway::class);
                return new Model\FlowerTable($tableGateway);
                },
                        Model\FlowerTableGateway::class=>function($container){
                        $adapter=$container->get(AdapterInterface::class);
                        $resultSetPrototype=new ResultSet();
                        $resultSetPrototype->setArrayObjectPrototype(new Model\Flower);
                        return new TableGateway('flower',$adapter,null,$resultSetPrototype);
                        }
            ]
        ];
    }
    public function getControllerConfig()
    {
        return[
            'factories'=>[
            Controller\IndexController::class=>function($container)
        {
            return new Controller\IndexController(
                    $container->get(Model\FlowerTable::class)
                    );
            }
            ]
        ];
    }
}
