<?php
include_once 'otherHeader.php'
?>


<div class="container text-center mt-5 pt-5 mb-5 redback rounded w-75 pb-3 form"  >
<h2 class="text-white mb-4">Verify Account!!!</h2>
            <?php
            $email=$_GET["email"];
            ?>
    <form action="includes/forgottenpwd.inc.php" method="POST">
    <div class='form-group'>
                  <input type="hidden"  name="email" value=<?php echo $email ?> >     
                    <label for='userEmail'>Enter code sent to your email</label>
                    
                    <div class='input-group mb-3'>
                    <input type='number' name="code" class='form-control' id='userEmail' placeholder='12345' aria-label='emailHelp'
                            aria-describedby='username' required>
                        <div class='input-group-append'>
                            <span class='input-group-text' id='emailHelp'><i class='fa fa-envelope-o' aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
        <div class='text-center'>
                 <button type='submit' name="verifypwd" class='btn btn-success mb-5 text-white w-25'>Verify</button>
        </div>
    <?php
     
     if($_GET["email"]=="failed"){
       echo '<p style=color:yellow;>Incorrect verification code</p>';
     }
    ?>
    </form>
       

</div>

<?php
include_once 'otherfooter.php'
?>

