<?php

include("db-connection.php");

$first_name = NULL;
$last_name = NULL;
$phone = NULL;
$email = NULL;
$password = NULL;
$password_confirm = NULL;

if(isset($_POST['register_submit_button'])){
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(!empty($password) && !empty($password_confirm)){
        if($password == $password_confirm){
            $sql_str = "insert into users(first_name, last_name, email, password, phone)
             values ('$first_name', '$last_name', '$email', '$password', '$phone')";
             if ($con->query($sql_str) === TRUE) {
                echo "New record created successfully";
              } 
              else 
              {
                echo "Error: " . $sql_str . "<br>" . $con->error;
              }
              
              $con->close();

 

        }

    }

}













?>