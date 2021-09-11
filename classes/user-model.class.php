<?php
class users extends dbh
{
    public $row;

    public function getuser($username)
    {
        $sql = "SELECT * FROM user WHERE username = ? ";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$username]);
        $row = $stm->fetch();
        $count = $stm->rowcount();
        if ($count > 0) :
            echo "<h1>Login</h1>";
            echo "<h1>Welcome : " . $row['username'] . "</h1>";


        else :
            echo "<h1>Incorrect username or password entered. Please try again.</h1>";
            header("refresh:2;url = index.php");

        endif;
    }

    public function inseruser($username, $email, $password)
    {

        $sql = "INSERT INTO user(username,email,`password`) VALUES(?,?,?)";
        $stm = $this->connect()->prepare($sql);
        $stm->execute([$username, $email, $password]);
    }
}
?>