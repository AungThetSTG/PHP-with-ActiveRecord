<?php
 require "config/config.php";
 require_once "vendor/php-activerecord/php-activerecord/ActiveRecord.php";

 ActiveRecord\Config::initialize(function($cfg) use($config){
     $cfg->set_model_directory('src/models');
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
 