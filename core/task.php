<?php
require_once('blowfish.php');
class task
{
    public $id;
    public $descrizione;
    public $terminata;
    
/*
    public function __construct($id, $desc)
   {
    $this->id=$id;   
    $this -> descrizione= Crypt::encrypt($desc,$this->key);
    $this -> terminata = 'false';
   }
    */
    public function complete()
    {
        $this->terminata = true;
    }
    public function descrizione(){
        return Crypt::decrypt($this->descrizione);
    }
}
