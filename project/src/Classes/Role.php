<?php
namespace App\Classes ;


class Role{

    private $id ; 
    private $title ;
     
    public function __construct($id,$title){

        $this->id=$id;
        $this->title=$title;

    }
    public function setRole($title){
        $this->title=$title;
    }

    public function getId(){

        return $this->id;

    }
    public function getTitle(){

        return $this->title;

    }


}

?>
