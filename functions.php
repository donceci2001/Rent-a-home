<?php

session_start();
require_once 'db.php';


function register_user(){

    $con = mysqli_connect('localhost', 'root', '', 'project');

    if(isset($_POST['btn-register']) || $_SERVER['REQUEST_METHOD']=='POST'){

        $name = mysqli_real_escape_string($con, $_POST['name']);
        $surname = mysqli_real_escape_string($con, $_POST['surname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $password2 = mysqli_real_escape_string($con, $_POST['password2']);

            if($password!=$password2){
                echo"The two passwords must be the same!";
            } else {
           $sql = "INSERT INTO users(name,surname, email, password) values('$name','$surname', '$email','$password')";
          
           $data = mysqli_query($con,$sql);
           if($data){
            echo "Success";
           } else {
            echo "Problem";
           }
           $_SESSION['ID']=$row['id'];
           $_SESSION['NAME']=$row['name'];

           header("location: login.php");
         }

    }
}

function login_user(){

    $con = mysqli_connect('localhost', 'root', '', 'project');

    if(isset($_POST['btn-login']) || $_SERVER['REQUEST_METHOD']=='POST'){

        $name = mysqli_real_escape_string($con, $_POST['name']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
 
        $query = "select * from users where name = '$name'";
        $result = mysqli_query($con,$query);
           
        if($row=mysqli_fetch_assoc($result)){

             $db_pass = $row['password'];
            if($password == $db_pass){
                  $_SESSION['ID']=$row['id'];
                  header("location: index.php");
             } else {
                   echo "Password not matched!";
            }
            } else {
                echo "Please enter valid name!";
           }
        

    }
}

function saveReview(){
    $con = mysqli_connect('localhost', 'root', '', 'project');
    
    if(isset($_POST['send-message']) || $_SERVER['REQUEST_METHOD']=='POST'){

        $text = mysqli_real_escape_string($con, $_POST['text']);

        $sql = "INSERT INTO users(text) values('$text')";
          
        $data = mysqli_query($con,$sql);
        if($data){
         echo "Success";
        } else {
         echo "Problem";
        }
                   
         }

}
?>