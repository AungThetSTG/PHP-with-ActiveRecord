<?php
    Class post extends ActiveRecord\Model{

        static $before_save = array('info','nextInfo');

        public function info(){
            echo "saving....";
        }

        public function nextInfo(){
            echo "really saving...\n";
        }

        static $alias_attribute = array(
            'author' => 'user_id'
        );

        public function linkTo($user){
            $this->user_id = $user->id;
        }

        public function owner(){
            $user = User::find($this->user_id);
            return $user;
        }
    }
?>