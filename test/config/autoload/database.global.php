<?php
return array(
        'doctrine' => array(
                'connection' => array(
                        'orm_default' => array(
                                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                                'params' => array(
                                        'host' => 'localhost',
                                        'port' => '3306',
                                        'user' => 'root',
                                        'charset' => 'UTF8',
                                        'password' => 'root',
                                        'dbname' => 'test-technique'
                                )
                        )
                ),
        )
);