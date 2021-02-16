<?php

// make this into a class ?
// public emptyCredentials($name,$password){}
// public function invalidUsername($name)
// public function invalidpassword($password)

$result;

function emptyCredentials($name,$password)
{    
    if(empty($name)||empty($password)){
        // $result = "Username or Password cannot be empty.";
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;

}

function invalidUsername($name){
    if(!preg_match('/^[a-zA-Z0-9]*$/',$name) ){
        $result=true;
    }
    else{
        $result=false;
    }

    return $result;
}

function invalidpassword($password)
{
    // (?=.*[!@#$%^&*-]) - special characters

    if(preg_match('/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A_Z]).{8,}$/',$password)){
        $result=true;
    }
    else{
        $result=false;
    }

    return $result;
}

