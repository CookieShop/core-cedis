<?php
$path=  realpath((__DIR__).'/../').'/src/';

return [
    'adteam_core_cedis'=>[
        'test'=>$path
    ],
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                'params' => [
                    'charset' => 'utf8',
                ],
            ],
        ],
        'driver' => [
            'Doctrine_driver_cedis' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    0 => $path.'/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Adteam\\Core\\Cedis' => 'Doctrine_driver_cedis',
                ],
            ],
        ],
    ],  
    'configuration' => [
        'orm_default' => [
            'datetime_functions' => [
                'DATE_FORMAT' => 'Adteam\Core\Cedis\Functionsmysql\DateFormat'
            ],
        ],
    ],    
];
