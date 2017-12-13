<?php

Class User extends ActiveRecord\Model{
    static $has_many = array(
        array('post')
    );

    public function add($post){
        $post->user_id = $this->id;
        return $post;
    }
}