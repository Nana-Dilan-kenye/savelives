
<?php
include_once 'header.php'
?>

<?php
session_start();
if(isset($_SESSION["userId"])  && isset($_SESSION["userName"])){
    
   $sql= "SELECT * FROM users WHERE userId=$_SESSION[userId];";
   $query= mysqli_query($conn,$sql);
   $data=mysqli_fetch_assoc($query);
   $name=$data['userFullname'];
   $email=$data['userEmail'];
   $weight=$data['userWeight'];
   $num=$data['userWanum'];
   $region=$data['userRegion'];
   $city=$data['userCity'];
   $gender=$data['userGender'];
   $bloodgroup=$data['userBloodgroup'];
   $dob=$data['userBirth'];
   $LastTran=$data['userLastTran'];



    echo "
    <!-- Navbar -->
    <nav class='navbar navbar-expand-lg navbar-light redback'>
        <div class='bg-light topimage'>
            <a class='navbar-brand' href='index.php'>
                <img src='/assets/savelive.png' alt='' width='120' height='40' class='d-inline-block'>
            </a>
        </div>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>

       
    </nav>

    <!-- jumbotron -->
    <section>
        <div class='jumbotron text-center decolor backcolor'>
            <h1 class='display-4 mt-4 font-weight-bold'>User Dashboard!</h1>

        </div>
    </section>

    <section class='px-5 m-5 bg-light text-muted'>

        <div class='container text-center'>
            <h4 class='mb-5'>Account Details</h4>
        </div>

        <div class='container '>
            <form action='includes/dashboard.inc.php' method='POST'>
                <div class='form-group'>
                    <label for='name'>Full Name</label>
                    <div class='input-group mb-3'>
                        <input type='text' name='name'  class='form-control' id='name' placeholder='$name' aria-label='Username'
                            aria-describedby='username' required>
                        <div class='input-group-append'>
                            <span class='input-group-text' id='username'><i class='fa fa-user'
                                    aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='userEmail'>Email address</label>
                    <div class='input-group mb-3'>
                    <input type='email' name='email' class='form-control' id='userEmail' placeholder='$email' aria-label='emailHelp'
                            aria-describedby='username' required>
                        <div class='input-group-append'>
                            <span class='input-group-text' id='emailHelp'><i class='fa fa-envelope-o'
                                    aria-hidden='true'></i></span>
                        </div>
                    </div>
                </div>
                <div class='form-group'>
                    <label for='weight'>weight(KG)</label>
                    <input type='number' name='weight' class='form-control' id='name' placeholder='$weight'required>
                </div>
                <div class='form-group'>
                    <label for='dob'>Date of Birth</label>
                    <input type='text' name='dob' onfocus=this.type='date' class='form-control' id='dob' placeholder='$dob' required>
                </div>
                <div class='form-group'>
                    <label for='phone'>Phone Number</label>
                    <div class='input-group mb-3'>
                        <input type='number' name='num' class='form-control' id='phone' placeholder='$num' aria-label='number'
                            aria-describedby='username' required>
                            
                    </div>
                </div>
                <div class='form-group'>
                    <label for='region'>Select Region</label>
                    <select name='region' class='form-control' id='region' required>
                        <option selected disabled>$region</option>
                        <option value='SouthWest'>SouthWest</option>
                        <option value='NorthWest'>NorthWest</option>
                        <option value='Littoral'>Littoral</option>
                        <option value='East'>East</option>
                        <option value='West'>West</option>
                        <option value='FarNorth'>FarNorth</option>
                        <option value='North'>North</option>
                        <option value='South'>South</option>
                        <option value='Centre'>Centre</option>
                        <option value='Adamawa'>Adamawa</option>
                    </select>
                </div>
            <div class='form-group'>
                <label for='gender'>City</label>
                <div class='input-group mb-3'>
                <input type='text' name='city'  class='form-control' id='name' placeholder='$city' aria-label='Username'
                    aria-describedby='username' required>
                <div class='input-group-append'>
                    <span class='input-group-text' id='username'><i class='fa fa-user'
                            aria-hidden='true'></i></span>
                </div>
                </div>
            </div>

                <div class='form-group'>
                    <label for='gender'>Gender</label>
                        <select name='gender' class='form-control' id='gender'required >
                            <option selected disabled>$gender</option>
                            <option value='Male'>Male</option>
                            <option value='Female'>Female</option>
                        </select>
                </div>

                <div class='form-group'>
                    <label for='bloodGroup'>Blood Group</label>
                    <select name='bloodgroup' class='form-control' id='bloodGroup' required>
                        <option  selected disabled>$bloodgroup</option>
                        <option value='O-'>O-</option>
                        <option value='O+'>O+</option>
                        <option value='A-'>A-</option>
                        <option value='A+'>A+</option>
                        <option value='B-'>B-</option>
                        <option value='B+'>B+</option>
                        <option value='AB-'>AB-</option>
                        <option value='AB+'>AB+</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='dob'>Date of Last Donation</label>
                    <input name='lastTran' type='text' onfocus=this.type='date' class='form-control' id='donatedate' placeholder='$LastTran' required >
                </div>
                <div class='text-center'>
                    <button type='submit' name='update-account' class='btn btn-success mb-5 text-white'>Update
                        Account</button>
                </div>

               

            </form>
        </div>
    </section>

    <script src='https://use.fontawesome.com/ca84490cc7.js'></script>

    ";
  

        if(isset($_GET['sucess'])){
       echo '<script>alert("Update Sucessful")</script>';
       }
    
}
else{
    header("location:login.php");
}
?>
 <?php
include_once 'footer.php'
?>