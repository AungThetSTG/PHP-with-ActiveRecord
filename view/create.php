<?php
        require_once "util/activeRecordImporter.php";
        require "util/function.php";

        $user = null;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $_REQUEST['status']   = false;

            $user = new User(
              [
                'name'      => $_POST['name'], 
                'password'  => $_POST['password'],
                'job'       => $_POST['job'],
                'age'       => is_numeric($_POST['age'])? $_POST['age'] : 0
              ]);

            if($user->is_valid())
              { 
                $user->save();
                
                $_REQUEST = [];
                $_REQUEST['status']   = true;
                $_REQUEST['message']  = "Successfully Saved!";
              }
            
        } 

        view('create', array('user'=> $user));
