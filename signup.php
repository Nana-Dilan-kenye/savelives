<?php
include_once 'otherHeader.php'
?>

<body style=background-image:url(img/bld1.jpg);>
    <br>
    <div class="container text-center m-5 p-5 mb-5 redback rounded w-75 pb-3 form">

        <form class="form-anticlear" action="includes/signup.inc.php" method="post">
            <!-- Signup form -->
            <h3 class="text-white m-5">Fill in the information below Correctly to signup</h3>
            <div class="form-group px-3">
                <input type='text' class='form-control input' name='name' placeholder='Full name'>
            </div>
            <div class="form-group px-3">
                <input type='text' class='form-control input' name='birthdate' onfocus="(this.type='date')" placeholder='Enter Date Of Birth'>
            </div>
            <div class="form-group px-3">
                <input type='text' class='form-control input' name='lastTran' onfocus="(this.type='date')" placeholder='Date Of Last Transfusion' required>
            </div>
            <div class="form-group px-3">
                <select class="form-control" name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="form-group px-3">
                <input type='text' class='form-control input' name='email' placeholder='Email'>
            </div>
            <div class="form-group px-3">
                <input type='text' class='form-control input' name='uid' placeholder='Username'>
            </div>
            <div class="form-group px-3">
                <input type='text' class='form-control input' name='weight' placeholder='weight(KG)'>
            </div>

            <div class="form-group px-3">
                <select name="bloodgroup" class="form-control input" id="">
                    <option selected disabled>Select BloodGroup</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B-">B-</option>
                    <option value="B+">B+</option>
                    <option value="AB-">AB-</option>
                    <option value="AB+">AB+</option>
                </select>
            </div>

            <div class="form-group px-3">
                <input type='text' class='form-control input' name='wanum' placeholder='Whatsapp number(+23767*******3)'>
            </div>

            <div class="form-group px-3">

                <select name="region" class="form-control input">
                    <option selected disabled>Select Region</option>
                    <option value="SouthWest">SouthWest</option>
                    <option value="NorthWest">NorthWest</option>
                    <option value="Littoral">Littoral</option>
                    <option value="East">East</option>
                    <option value="West">West</option>
                    <option value="FarNorth">FarNorth</option>
                    <option value="North">North</option>
                    <option value="South">South</option>
                    <option value="Centre">Centre</option>
                    <option value="Adamawa">Adamawa</option>

                </select>

            </div>

            <div class="form-group px-3">
                <input type='text' class='form-control input' name='city' placeholder='City'>
            </div>
            <div class="form-group px-3">
                <input type='password' class='form-control input' name='pwd' placeholder='Password'>
            </div>
            <div class="form-group px-3">
                <input type='password' class='form-control input' name='repeatpwd' placeholder='Repeat Password'>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-50" name='signup'>Sign Up</button>

            <!--Error handlers in php-->
            <?php
            if (isset($_GET["error"])) {

                if ($_GET["error"] == "invalidfullname") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid Full name*</p>";
                } else if ($_GET["error"] == "invalidbirth") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid date of birth*</p>";
                } else if ($_GET["error"] == "invalidgender") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid gender , Male or Female*</p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid Email(example@gmail.com)*</p>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid username*</p>";
                } else if ($_GET["error"] == "invalidweigh") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid weight(KG)*</p>";
                } else if ($_GET["error"] == "invalidbloodgroup") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid Blood group*</p>";
                } else if ($_GET["error"] == "invalidwanum") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid Whatsapp number*</p>";
                } else if ($_GET["error"] == "invalidregion") {
                    echo "<p style='color:yellow;font-size:30px;'>*Enter a valid Region*</p>";
                } else if ($_GET["error"] == "invalidcity") {
                    echo "<p style='color:yellow';font-size:30px;>*Enter a valid city*</p>";
                } else if ($_GET["error"] == "invalidpwddontmatch") {
                    echo "<p style='color:yellow;font-size:30px;'>*Passwords dont match*</p>";
                } else if ($_GET["error"] == "emptyInput") {
                    echo "<p style='color:yellow;font-size:30px;'>*Fill all fields before signing up*</p";
                } else if ($_GET["error"] == "pwdshort") {
                    echo "<p style='color:yellow;font-size:30px;'>*Password too short ,minimun length=7*</p";
                } else if ($_GET["error"] == "useruidtaken") {
                    echo "<p style='color:yellow;font-size:30px;'>*Username, Email or Whatsapp number taken*</p";
                } else if ($_GET["error"] == "none") {
                    echo "<p style='color:rgb(0,256,0);font-size:35px;'>Successfully Signed Up!!!</p";
                    header("Location: dashboard.php ");
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p style='color:yellow;font-size:30px;'>*Something went wrong*</p";
                }
            }
            ?>
            <p style=color:#fff;>Already have an account?<a href='login.php'> Login</a></p>

        </form>
    </div>
    <?php
    include_once 'otherfooter.php'
    ?>