<?php
     session_start();

     $table_name=$_SESSION['table'];
     $First_name=$_POST['First_name'];
     $Last_name=$_POST['Last_name'];
     $email=$_POST['email'];
     $pass_word=$_POST['pass_word'];
     $encrypted=password_hash($pass_word,PASSWORD_DEFAULT);
     
    try{
        $command="INSERT INTO 
                           $table_name(First_name,Last_name,email,pass_word,created_at,updated_at) 
                  VALUES('".$First_name."','".$Last_name."','".$email."','".$encrypted."',NOW(),NOW())";

        include('connection.php');
        $response=[
            'success'=>true,
            'message' => $First_name .'  ' . $Last_name. ' successfully added to the system.'
        ];
        $conn->exec($command);
    }catch(PDOException $e){
        
        $response=[
            'success'=>false,
            'message' => $e->getMessage()
        ];
    }

    $_SESSION['response']=$response;
    header('location:../register.php');
     
     
     

?>