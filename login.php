<?php
 require_once "functions.php";
 login_user();

?>

<!DOCTYPE html>
    <html lang="en" >
      <head>        
             <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="styleforlogin.css">

        </head>
        <body>
            <div class="login-div">
              <div class="form">
                  <div class="subtitle">Login</div>
                     <form  method = "POST">  
                          <div class="username">
                           <input type = "text" placeholder="Name " name="name" required>
                          </div>
            
                           <div class="password">
                               <input type = "password" placeholder="Password" name="password" required>
                            </div>
                        
                            <div class ="sign-in">
                                 <button type="submit" class="signin-btn" value="Login" name="btn-login">Login</button>
                            </div>
                            <div class="sign-up">
                                <a href="register.php">New to the site? Sign up here!</a>
                            </div>

                     </form>        
                     
                    </div>

                </div>
            </div>
    
         </body>
</html>

