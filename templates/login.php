<?php
require_once "../db.php";




if (isset($_POST['username'])) :

    $username = $_POST['username'];
    $password  = $_POST['password'];

    $insert_data = new users();

    $insert_data->getuser($username);

else :

    echo "<h1>The User is Not exsist</h1>";

    header("refresh:4; url=index.php ");



endif;
