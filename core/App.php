<?php

class App 
{
    protected static $arr=[];

    static function bind($key, $value){

        static::$arr[$key]= $value;

    }
    static function get($key){
        if(!array_key_exists($key, static::$arr)){
            throw new Exception("Errore richiesta get", 1);
            
        }
        return static::$arr[$key];
    }
}
