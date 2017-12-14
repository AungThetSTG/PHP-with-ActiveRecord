<?php

Class User extends ActiveRecord\Model{

    static $attr_accessible = array('name', 'password', 'job');

    static $validates_presence_of = array(
        array('name'),
        array('password'),
        array('job')
    );

    static $validates_format_of = array(
                 array('age', 'with' => '/^[0-9]$/')
    );
        
    static $validates_numericality_of = array(
        array('age','greater_than' => 18, 'message' => 'must be greater than 18!')
    );

    static $has_many = array(
        array('post')
    );

    public function add($post){
        $post->user_id = $this->id;
        return $post;
    }
}