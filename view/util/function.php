<?php

function view($path, $data = null) 
{
	if ( $data ) {
		extract($data);
    }

	$path .= '.view.php';

	include "./layout/layout.php";
}

function old($key){
	if( isset($_REQUEST[$key]) ){
		return $_REQUEST[$key];
	}
}

function is_error($obj, $key){
	if(isset($obj->errors)){
		if(count($obj->errors->on($key)) == 1){
			return ucfirst($key) . ' ' . $obj->errors->on($key);
		}
		return ucfirst($key) . ' ' . $obj->errors->on($key)[0];
	}
}

    