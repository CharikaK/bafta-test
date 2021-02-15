<?php
if(isset($_POST['submit']))
{   

    $name=$_POST['useruname'];
    $password=$_POST['userpassword'];

    require_once('includes/database.inc.php');
    require_once('includes/errorhandling.inc.php');

    /**
     * $error = new ErrorHandling();
     * $error->validations($_POST vars);     * 
     */
    // this whole this would go to errorHandling class
    if(emptyCredentials($name,$password)){
        header('location: login.php?error=emptycredentials');
        exit();
    }elseif(invalidUsername($name)){
        header('location: login.php?error=invalidun');
        exit();
    }elseif(invalidpassword($password)){
        header('location: login.php?error=invalidpw');
        exit();
    }

    loginToTheSystem($_POST);


}
else{
    header('location: login.php');
    exit();
}

