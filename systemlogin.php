<?php
if(isset($_POST['submit']))
{   
    $name=$_POST['useruname'];
    $password=$_POST['userpassword'];

    require_once('includes/database.inc.php');
    require_once('includes/errorhandling.inc.php');

    /**
     * $error = new ErrorHandling();
     * $error->validations($_POST vars);     
     **/
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

    $userLevel = loginToTheSystem($conn,$_POST);
    
    // can use the same page with relevant content 
    // can redirect yo relevant .html pages

    switch ($userLevel) {
        case 'novice':
          header('location: views/level.php?level=novice');
          break;
        case 'intermediate':
          header('location: views/level.php?level=intermediate');
          break;
        case 'expert':
          header('location: views/level.php?level=expert');
          break;          
        default:
          header('location: views/level.php?level=nolevel');
      }

}
else{
    header('location: login.php');
    exit();
}

// Procedural mysqli functions are used here.
function loginToTheSystem($conn,$posts){   
  
    // from - here to to can go to database class 
   $sql="SELECT * FROM users WHERE userUName=? AND userPassword=?;";
   $stmt=mysqli_stmt_init($conn);

   // Good to catch SQLInjections - preparing the SQL as an acceptance
   if(!mysqli_stmt_prepare($stmt,$sql)){
    header('location: login.php?error=sqlfail');
    exit();
   }

   mysqli_stmt_bind_param($stmt,'ss',$posts['useruname'],$posts['userpassword']);
   mysqli_stmt_execute($stmt);   

   // return from the database class
   $resultdata=mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultdata)){       
        return $row['userLevel'];

   }else{
       $result = false;
       return $result;
   }

}

