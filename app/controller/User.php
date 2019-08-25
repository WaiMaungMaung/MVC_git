<?php

class User extends Controller
{
    public $userModel;
    public function __construct()
    {

        $this->userModel= $this->model("UserModel");
    }
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [

                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "password" => $_POST['password'],
                "cpassword" => $_POST['cpassword'],
                "name_err" => '',
                "email_err" => '',
                "password_err" => '',
                "cpassword_err" => ''
            ];
            $check = $this->userModel->checkEmail($data['email']);
            if($check){
                $data['email_err'] = "Email already used";
            }
            if (empty($data['name'])) {
                $data['name_err'] = "User name must be supply";
            }
            if (empty($data['email'])) {
                $data['email_err'] = "Email must be supply";
            }
            if (empty($data['password'])) {
                $data['password_err'] = "Password must be supply";
            }
            if (empty($data['cpassword'])) {
                $data['cpassword_err'] = "Confirm your password";
            } else {
                if ($data['password'] != $data['cpassword']) {
                    $data['cpassword_err'] = "Password do not match";
                }
            }



                if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['cpassword_err'])) {
                    if ($this->userModel->register($data['name'], $data['email'], $data['password'])) {
                        flash("register_success","Register success!Plz Login");
                        $this->view("user/login");
                    } else {
                        $this->view("user/register", $data);
                    }

                } else {
                    $this->view("user/register", $data);
                    echo "not bak";
                }





        }
        else {
            $this->view("user/register");
        }

    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [


                "email" => $_POST['email'],
                "password" => $_POST['password'],


                "email_err" => '',
                "password_err" => ''

            ];

            if (empty($data['email'])) {
                $data['email_err'] = "Email must be supply";
            }
            if (empty($data['password'])) {
                $data['password_err'] = "Password must be supply";
            }


            if (empty($data['email_err']) && empty($data['password_err'])) {


                $match=$this->userModel->checkEmail($data['email'],"n");

                if(password_verify($data["password"],$match->password)){
                    flash("login_success","Success!welcome back sir");
                    $this->view("home/index");
                    echo"success";
                }
                else{
                    flash("login_fail","Email and password do not match");
                    $this->view("user/login");
                    echo "fail";
                }
            } else {
                $this->view("user/login", $data);
                echo "not bak";
            }

        }
        else {
            $this->view("user/login");
        }

    }
    public function index(){
echo "hello";
    }
}