<?php
 require_once "functions.php";
 register_user();

?>

<!DOCTYPE html>
<html>
    <head>
       
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel ="stylesheet" href="styleforlogin.css" >
    </head>
    <body>
            <div class="login-div">
              <div class="form">
                  <div class="subtitle">Register</div>
                     <form  method = "POST">  
                        <div class="name">
                              <input type="text" name="name" placeholder="Name"  required>
                         </div>
            
                         <div class="surname">
                             <input type="text" name="surname" placeholder="Surname" required>
                         </div>
                        
                        <div class="email">
                            <input type="text" name="email" placeholder="Email"  required>
                        </div>

                         <div class="password">
                          <input type="password" name="password" placeholder="Password"  required>
                         </div>

                         <div class="password2">
                             <input type = "password" name = "password2" placeholder="Confirm Password" required>
                         </div>
                        
                         <div class ="sign-up">
                          <button type="submit" class="signin-btn" value="Sign up" name="btn-register">Sign up</button>
                        </div>
               
                         <p>Already have an account? <a href="login.php">Login here</a>.</p>

                     </form>        
                     
                    </div>

                </div>
            </div>
    
         </body>
</html>