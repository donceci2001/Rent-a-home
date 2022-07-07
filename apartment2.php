
<?php
require_once "functions.php";
require_once "db.php";

$con = mysqli_connect('localhost', 'root', '', 'project');

$query = "SELECT * FROM descr WHERE id = '2'";
$result = mysqli_query($con, $query);
$row =mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
    <html lang="en" >
      <head>        
             <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="styleforlogin.css">
        </head>
        <body>
                <div class="login-div">
                <div class="title">Varna-400$</div>
                     <div class="img">
                        <img src="images/a-3.jpg" alt="">
                      </div>
                     <div class = "desc">
                         <p>
                         <?php echo $row['text']?>
                         </p>
                    </div>   
                     <div class="sign-up">
                     <input type="button" name= "send" onclick= "location.href='index.php'" value="Home page" />
                    </div>
                </div>

        </body>
      
        
</html>