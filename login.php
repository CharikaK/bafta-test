<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>BAFTA Test Login</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
        <div class="row justify-content-center">     

            <div class="col-md-6 contents">

              <div class="row justify-content-center">

                <div class="col-md-12">

                  <div class="form-block">
                      <div class="mb-4">
                      <h3>Sign In to the system.</h3>
                      <p class="mb-4">Please enter your UserID and the Password to Login.</p>
                      </div>

                      <form action="systemlogin.php" method="post">
                        <div class="form-group first">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" name="useruname">
                        </div>
                        <div class="form-group last mb-4">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="userpassword">                    
                        </div>                  
                        <div class="d-flex mb-5 align-items-center">                   
                          <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                        </div>
                        <button type="submit" name="submit" class="btn btn-pill text-white btn-block btn-primary"> Log In </button>
                      </form>

                      <!-- error message -->                      
                      <div class="mb-4 mt-4 alert alert-warning"> 

                        <?php
                          $error='';                      
                          $error=$_GET['error'] ?? '';                      

                          if($error == 'emptycredentials'){
                            echo "<p class='p-error'><strong>Username and password must not be empty.</strong></p>";
                          }elseif($error == 'invalidun'){
                            echo "<p class='p-error'><strong>Username contains invalid characters.</strong></p>";
                          }
                          elseif($error == 'invalidpw'){
                            echo "<p class='p-error'><strong>Password contains invalid characters.</strong></p>";
                          }
                        ?>                  
                      
                      </div> <!-- /error message -->

                  </div>

                </div>

              </div>
              
            </div>
          
        </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>    
  </body>
</html>