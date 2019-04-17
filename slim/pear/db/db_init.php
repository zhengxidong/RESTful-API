<?php
require_once dirname(__FILE__)."/../activerecord/ActiveRecord.php";
require_once dirname(__FILE__)."/../config/MysqlConfig.inc.php";

$connections = MysqlConfig::$dataBaseConnections;

ActiveRecord\Config::initialize(function($cfg) use ($connections)
{
    $cfg->set_model_directory('.');
    $cfg->set_connections($connections[MysqlConfig::DATABASE_DEFAULT_ENV]);
});
