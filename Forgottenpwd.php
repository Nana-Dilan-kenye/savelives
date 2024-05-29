<?php
include_once 'otherHeader.php'
?>

 
    


<div class="container text-center mt-5 pt-5 mb-5 redback rounded w-75 pb-3 form"  >

    <form action="includes/forgottenpwd.inc.php" method="post">
    <h1 class="text-white">Forgotten Password!!!</h1>
    <div class='form-group'>
                    <label for='userEmail' class="text-muted">Enter email address to reset password</label>
                    <div class='input-group mb-3'>
                    <input type='email' name="email" class='form-control' id='userEmail' placeholder='example@gmail.com' aria-label='emailHelp'
                            aria-describedby='username' required>
                        <div class='input-group-append'>
                            <span class='input-group-text' id='emailHelp'><i class='fa fa-envelope-o' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
        <div class='text-center'>
                 <button type='submit' name="forgotpwd" class='btn btn-success mb-5 text-white'>Reset Password</button>
        </div>

        <?php
            if(isset($_GET["error"])){

                if($_GET["error"]=="EmailNotFound"){
                    echo "<p style='color:yellow;'>You Do Not Have An Account!!! <a href='signup.php' > Create Account</button></a> </p>
                    <div class='text-center'>
                 
                    </div>
            
                    ";
                }
            }
        ?>

    </form>
       

</div>

<?php
include_once 'otherfooter.php'
?>

