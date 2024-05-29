<?php
include_once 'otherHeader.php'
?>

<section class="rstpwd">
    
</section>

<div class="resetpwd">

    <?php

    $email = $_GET["email"];

    ?>
    <div class="container text-center mt-5 pt-5 mb-5 redback rounded w-75 pb-3 form">
    <h3 class="text-white">Reset Password!!!</h3>
        <form action="includes/forgottenpwd.inc.php" method="POST">
            <div class='form-group'>
                <label for='userEmail'>Enter New Password</label>
                <input type="hidden" name="email" value=<?php echo $_GET["email"]; ?>>
                <div class='input-group mb-3'>
                    <input type='password' name="password" class='form-control' id='userEmail' placeholder='Password' aria-label='emailHelp' aria-describedby='username' required>
                    <div class='input-group-append'>
                        <span class='input-group-text' id='emailHelp'><i class='fa fa-unlock-alt' aria-hidden='true'></i></span>
                    </div>
                </div>
                <div class='input-group mb-3'>
                    <input type='password' name="pwdrepeat" class='form-control' id='userEmail' placeholder='Repeat-Pasword' aria-label='emailHelp' aria-describedby='username' required>
                    <div class='input-group-append'>
                        <span class='input-group-text' id='emailHelp'><i class='fa fa-unlock-alt' aria-hidden='true'></i></span>
                    </div>
                </div>
            </div>
            <div class='text-center'>
                <button type='submit' name="resetpwd" class='btn btn-success mb-5 text-white'>Reset Password</button>
            </div>
            <?php
    if (isset($_GET["error"])) {

        if ($_GET["error"] == "invalidpwddontmatch") {
            echo "<p style='color:yellow;font-size:20px;'>*Passwords Don't Match*</p>";
        } else if ($_GET["error"] == "pwdshort") {
            echo "<p style='color:yellow;font-size:20px;'>*Password too short min-length=7*</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p style='color:yellow;font-size:20px;'>Password Changed!!!</p>
        <div class='text-center'>
     <a href='login.php' <button type='' name='login' class='btn btn-success mb-5 text-white'>Login</button></a>
        </div>

        ";
        }
    }
    ?>
    </div>

    </form>



</div>

<?php
include_once 'otherfooter.php'
?>