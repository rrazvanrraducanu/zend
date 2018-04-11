<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Forme;

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
            ///////////////////////////77
            'hello' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/hello',
                    'defaults' => [
                        'controller' => Controller\FormController::class,
                        'action'     => 'hello',
                    ],
                ],
            ],
            /////////////////////////////////
            /////////////////////////////
              'popescu' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/popescu',
                    'defaults' => [
                        'controller' => Controller\FormController::class,
                        'action'     => 'popescu',
                    ],
                ],
            ],
            ///////////////////////////////////
            /////////////////////////////////
              'showpopescu' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/showpopescu',
                    'defaults' => [
                        'controller' => Controller\FormController::class,
                        'action'     => 'showpopescu',
                    ],
                ],
            ],
            ////////////////////////
            ////////////////////////
             'copy1' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/copy',
                    'defaults' => [
                        'controller' => Controller\FormController::class,
                        'action'     => 'copy1',
                    ],
                ],
            ],
            ///////////////////////////////77
            //////////////////////////////
               'showcopy1' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/showcopy',
                    'defaults' => [
                        'controller' => Controller\FormController::class,
                        'action'     => 'showcopy1',
                    ],
                ],
            ],
            ///////////////////////////////////7
            
            'forme' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/forme[/:action]',
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
            Controller\FormController::class=>InvokableFactory::class,
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
            'forme/index/index' => __DIR__ . '/../view/forme/index/index.phtml',
            'forme/index/hello' => __DIR__ . '/../view/forme/index/hello.phtml',
            'forme/index/popescu' => __DIR__ . '/../view/forme/index/popescu_form.phtml',
            'forme/index/showpopescu' => __DIR__ . '/../view/forme/index/popescu_show.phtml',
            'forme/index/copy' => __DIR__ . '/../view/forme/index/copy1_form.phtml',
            'forme/index/showcopy' => __DIR__ . '/../view/forme/index/copy1_show.phtml',
            
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
