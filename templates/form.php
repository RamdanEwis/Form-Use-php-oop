<?php

require_once "../db.php";



if (isset($_POST['login'])):

        $username = $_POST['username'];
        $password  = $_POST['password'];
    
        $insert_data = new users();
    
        $insert_data->getuser($username);
    


    
elseif(isset($_POST['signup'])) :

    $username = $_POST['username'];
    $email  = $_POST['email'];
    $password  = $_POST['password'];
    $password  = sha1($_POST['password']);

    $insert_data = new users();
    $insert_data->inseruser($username, $email, $password);

    echo "<h1>The User is Insert</h1>";
    //$url = "../index.php";

    header("refresh:2; url= ../index.php");

    else :
    
        echo "<h1>The User ois Not exsist</h1>";
    
        header("refresh:4; url=index.php ");
    
    

endif;

?>