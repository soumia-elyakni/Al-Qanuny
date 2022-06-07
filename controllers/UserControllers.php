<?php

class UserControllers {
    public function getAllUsres(){
        $users = user::getAll();
        return $users;
    }
}
?>