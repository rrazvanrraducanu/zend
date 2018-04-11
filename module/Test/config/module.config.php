<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Test;

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
       ///////////////////////////////////////////////
             'welcome' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/welcome',
                    'defaults' => [
                        'controller' => Controller\WelcomeController::class,
                        'action'     => 'index',
                    ],
                ],
            ], 
      /////////////////////////////// 
             ///////////////////////////////////////////////
             'contact' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/contact',
                    'defaults' => [
                        'controller' => Controller\WelcomeController::class,
                        'action'     => 'contact',
                    ],
                ],
            ], 
      /////////////////////////////// 
             'test' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/test[/:action]',
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
            Controller\WelcomeController::class => InvokableFactory::class,
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
            'test/index/index' => __DIR__ . '/../view/test/index/index.phtml',
            'test/welcome/index' => __DIR__ . '/../view/test/welcome/index.phtml',
            'test/welcome/contact' => __DIR__ . '/../view/test/welcome/contact.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
