<?php

namespace App\Libraries;

class Hash
{

    public static function make($senha){
        return password_hash($senha, PASSWORD_BCRYPT);
    }
    public static function check($entered_password, $db_password){
        if(password_verify($entered_password, $db_password)){
            return true;
        }else{
            return false;
        }
    }
}