<?php
    require_once "util/activeRecordImporter.php";
    require "util/function.php";

    $users = User::all();

    view('user', array('users'=> $users));
    