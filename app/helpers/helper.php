<?php

function flash($name='',$message='')
{
    if (!empty($name)) {
        if (!empty($message))
        {
            if (isset($_SESSION[$name]))
            {
                unset($_SESSION[$name]);
            }
                $_SESSION[$name] = $message;
        }
        else {
            if(isset($_SESSION[$name])){
                echo "<div class='alert alert-success'>" . $_SESSION[$name] . "</div>";
                unset($_SESSION[$name]);
            }
        }
    }
}
function setUserSession($result){
    $_SESSION['current_user']=$result;
}
function getUserSession(){
    if(isset($_SESSION['current_user'])){
        return $_SESSION['current_user'];
    }
    else
        return false;
}
function unsetUserSession(){
        unset($_SESSION['current_user']);
}

function redirect($page){
    header("Location:".$page);
}