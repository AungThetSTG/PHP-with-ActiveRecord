<?php
$dir = dirname(__FILE__).DIRECTORY_SEPARATOR;
 require $dir . '../../config/config.php';
 require_once $dir . "../../vendor/php-activerecord/php-activerecord/ActiveRecord.php";

 ActiveRecord\Config::initialize(function($cfg) use($config, $dir){
     $cfg->set_model_directory($dir . '../../src/models');
     $cfg->set_connections(array(
         'development' => 'mysql://'.
                            $config['DB_USERNAME'].
                            ':'.
                            $config['DB_PASSWORD'].
                            '@localhost/php',
                'test' => 'mysql://'.
                            $config['DB_USERNAME'].
                            ':'.
                            $config['DB_PASSWORD'].
                            '@localhost/phptest'
       ));
 });
 