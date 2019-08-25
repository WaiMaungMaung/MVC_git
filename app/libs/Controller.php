<?php
class Controller{
    public $nn="mmg";
    public function view($view,$data=[]){
        if(file_exists("../app/view/".$view.".php"))
        require_once "../app/view/".$view.".php";//$data can easily get req_once is inside function
    }
    public function model($model){
        if(file_exists("../app/model/".$model.".php"));
        require_once "../app/model/".$model.".php";
        return new $model;
    }
}

