<?php
class Admin extends Controller {
    public function home(){
        $this->view('admin/home');
    }
    public function index(){
        echo "index";
    }
}