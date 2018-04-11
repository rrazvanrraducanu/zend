<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Vederi;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            ////////////////////////////
            'homeee' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/home',
                    'defaults' => [
                        'controller' => Controller\HomeController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            /////////////////////////
             ////////////////////////////
            'test' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/test',
                    'defaults' => [
                        'controller' => Controller\HomeController::class,
                        'action'     => 'nume',
                    ],
                ],
            ],
            /////////////////////////
               ////////////////////////////
            'data' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/data',
                    'defaults' => [
                        'controller' => Controller\HomeController::class,
                        'action'     => 'prenume',
                    ],
                ],
            ],
            /////////////////////////
            'vederi' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/vederi[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\HomeController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'vederi/index/index' => __DIR__ . '/../view/vederi/index/index.phtml',
            'vederi/home/index' => __DIR__ . '/../view/vederi/home/index.phtml',
            'vederi/home/test' => __DIR__ . '/../view/vederi/home/test.phtml',
            'vederi/home/data' => __DIR__ . '/../view/vederi/home/data.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
