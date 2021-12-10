<?php
class task
{
    public $id;
    public $descrizione;
    public $terminata;

    /*public function __construct($id, $desc, $terminata)
   {
    $this->id=$id;   
    $this -> descrizione= $desc;
    $this -> terminata = $terminata;

   }*/
    public function complete()
    {
        $this->terminata = true;
    }
}