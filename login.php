<?php
// login page begins here ,an index page will be linked to this to act as primary text
include_once 'otherHeader.php'
?>

<body style=background-image:url(img/bld1.jpg);>

    <br>
    <div class="container text-center mt-5 pt-5 mb-5 redback rounded w-75 pb-3 form">
        <form action="includes/login.inc.php" method="post" class="redback">

            <h1 class="text-white mb-3">LOG IN</h1>
            <div class="form-group px-3">
                <input type='text' class='form-control input' name='uid' placeholder='Username/Email'>
            </div>
            <div class="form-group px-3">
                <input type='password' class='form-control input' name='pwd' placeholder='Password'>
            </div>
              
            <button type="submit" class="btn btn-primary btn-lg w-50" name='login'>Login</button><br>


            <!--error handling for login.php-->
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInputlogin") {
                    echo "<p style='color:yellow;font-size:20px;'>*Fill all fields before logging in*</p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p style='color:yellow;font-size:20px;'>*Incorrect Username or Password*</p>";
                } else if ($_GET["error"] == "passwordchanged") {
                    echo "<p style='color:rgba(3, 168, 44, 0.911);;font-size:20px;'>*Password has been reset*</p>";
                }
            }
            ?>
            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                <small style=color:#fff;><a href="signup.php">Sign up </a> to create a new account</small>
                </div>
                <div class="col-lg-6 col-sm-12">
                <small><a href="Forgottenpwd.php">Forgotten password?</a></small>
                </div>
            </div>

        </form>
    </div><br>
    <!--<marquee behavior="scroll" direction="left" style="background-color:rgb(224, 79, 79);
padding:40px;font-size:30px;color:blue;width:100%;
"> Enter the correct cridentials to Login...
     Make sure you keep 1 meter distance, watch your hands and keep your loved onces save.
</marquee>-->
    <?php
    include_once 'otherfooter.php'
    ?>