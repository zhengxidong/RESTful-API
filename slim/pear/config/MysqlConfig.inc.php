<?php

class MysqlConfig{
    const DATABASE_DEFAULT_ENV = 'dev';
    static public $dataBaseConnections = 
    [
        'dev' => [
            'development' => 'mysql://root:zxd19950808@192.168.31.135:33066/demo'
        ]
    ];
    
}