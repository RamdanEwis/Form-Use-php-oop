<?php
include  'incloudes/autoloader.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/style.css">
    <title>Document</title>
</head>

<body>
    <!--Start section Form -->
    <section>
        <div class="container">
            <!--Start login -->
            <div class="user signinBx">
                <div class="imgBx"><img src="imges/img1.jpg" alt="" /></div>
                <div class="formBx">
                    <form method="POST" action="templates/form.php">
                        <h2>Sign In</h2>
                        <input type="text" name="username" placeholder="Username" />
                        <input type="password" name="password" placeholder="Password" />
                        <input type="submit" name="login" value="Login" />
                        <p class="signup">
                            Don't have an account ?
                            <a href="#" onclick="toggleForm();">Sign Up.</a>
                        </p>
                    </form>
                </div>
            </div>
            <!--End login -->

            <!--Start signup -->
            <div class="user signupBx">
                <div class="formBx">
                    <form method="POST" action="templates/form.php">
                        <h2>Create an account</h2>
                        <input type="text" name="username" placeholder="Username" />
                        <input type="email" name="email" placeholder="Email Address" />
                        <input type="password" name="password" placeholder="Create Password" />

                        <input type="submit" name="signup" value="Sign Up" />
                        <p class="signup">
                            Already have an account ?
                            <a href="#" onclick="toggleForm();">Sign in.</a>
                        </p>
                    </form>
                </div>
                <div class="imgBx"><img src="imges/img2.jpg" alt="" /></div>
            </div>
        </div>
        <!--End signup -->
    </section>
    <!--Start section Form -->

</body>
<script src="layout/front.js"></script>

</html>