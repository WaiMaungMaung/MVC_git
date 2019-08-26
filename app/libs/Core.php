<?php
class Core{
private $classname="Home";
private $methodName="index";
private $param=[];
    public function __construct()
{
    $this->getUrl();
}

    public function getUrl(){
        $url=isset($_GET['url'])? rtrim($_GET['url'],'/'):'';

        $arr=explode("/",$url);

        if(!empty($arr[0]))
            {
                if (file_exists("../app/controller/".ucfirst($arr[0]) . ".php")) {
                    $this->classname = ucfirst($arr[0]);
                }
                else
                    require_once "../app/helpers/error.php";
                unset($arr[0]);
            }
            require_once "../app/controller/".ucfirst($this->classname).".php";
            $callClass=new $this->classname();

        if(!empty($arr[1])){
            {
                if(method_exists(ucfirst($this->classname),$arr[1]))
                    $this->methodName=$arr[1];

            }
            unset($arr[1]);
        }
        $this->param=array_values($arr);

        call_user_func([$callClass,$this->methodName],$this->param);

    }
}