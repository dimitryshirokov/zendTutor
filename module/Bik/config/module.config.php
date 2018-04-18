<?php
/**
 * Created by PhpStorm.
 * User: qwerty123
 * Date: 18.04.18
 * Time: 9:15
 */
 namespace Bik;

 use Zend\Router\Http\Segment;
 use Zend\ServiceManager\Factory\InvokableFactory;

 return [
     'controllers' => [
         'factories' => [
             Controller\BikController::class => InvokableFactory::class,
         ],
     ],

     'router' => [
         'routes' => [
             'bik' => [
                 'type' => Segment::class,
                 'options' => [
                     'route' => '/bik[/action[/:id]]',
                     'constraints' => [
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id' => '[0-9]+',
                     ],
                     'defaults' => [
                         'controller' => Controller\BikController::class,
                         'action' => 'index',
                     ],
                 ],
             ],
         ],
     ],

     'view_manager' => [
         'template_path_stack' => [
             'bik' => __DIR__ . '/../view',
         ],
     ],
 ];