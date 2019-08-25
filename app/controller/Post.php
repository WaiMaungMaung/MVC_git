<?php
class Post extends Controller
{
    public function __construct()
    {

        echo "I'm construct of ".__CLASS__."class";
    }
    public function index(){
        echo "i'm index of".__CLASS__."class";

    }
    public function show(){
        $this->view("home/index");
        echo "this is show method from ".__CLASS__;
    }
}

