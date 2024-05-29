<?php
include_once('header.php')
?>
<!-- jumbotron -->
<section >
    <div class="jumbotron homejumbo text-center decolor " style="background-image: url('assets/blood.gif');">
        <h1 class="display-4 mt-5 pt-md-0 pt-5 font-weight-bold">Blood!! Donation!</h1>
        <p class="lead">Every 5 mins, someone in Cameroon needs blood. Donate blood and save lives.</p>

        <p>Patients are called upon to seek for blood donors on this platform.</p>
        <p class="lead ">
            <a class="btn redback text-white  p-2" href="signup.php" role="button">Become Donor</a>
            <a class="btn btn-primary p-2 mx-md-3 mx-1" href="search.php" role="button">Search Donor</a>
     
        </p>

    </div>

</section>

<!-- How does it work for blood seekers-->
<section class="p-5">
    <div class="container">
        <h2 class="mb-5 text-center font-weight-bold">How to Search Donor</h2>
        <div class="d-flex row text-center">
            <div class="mb-5 redback line"></div>
        </div>
        <div class="row">
            <div class="col-lg-6 d-none d-sm-block">
                <img src="assets/bloodtransfer.png" alt="" srcset="" width="100%">
            </div>
            <div class="col-lg-6 col-sm-12 mb-2">
                <h2 class="mb-5" style="color:red">For blood seekers</h2>
                <i class="fa fa-check-square-o fa-lg" aria-hidden="true" style="color:red"> </i> Choose the type of blood you seek <br><br>
                <i class="fa fa-check-square-o fa-lg" aria-hidden="true" style="color:red"> </i> Select your Region <br><br>
                <i class="fa fa-check-square-o fa-lg" aria-hidden="true" style="color:red"> </i> Pay platform charges <br><br>
                <i class="fa fa-check-square-o fa-lg" aria-hidden="true" style="color:red"> </i> You will the get list of donors near your location whom you can contact to donate blood <br>

                <img src="assets/move.gif" width="100%" alt="" srcset="">

            </div>


        </div>
        <div class="text-center">
            <a class="btn redback btn-lg m-5 text-white" href="search.php" role="button">Search Donor</a>
        </div>
    </div>
</section>

<!-- How does it work for donors-->
<section class="donorwork p-3 " style="background-image: url('assets/back.jpg');">
    <div class="container text-center text-white">
        <h1 class="mb-5 font-weight-bold ">How it works for Donors</h1>
        <div class="mb-5 redback line"></div>
        <div class="row redcolor bg-dark">
            <div class="col-lg-4 col-sm-12 text-center">
                <i class="fa fa-check-square-o fa-lg" aria-hidden="true" style="color:red">
                </i><p class="text-white"> Register as blood donor and save lives</p>
            </div><br>

            <div class="col-lg-4 col-sm-12 text-center"><i class="fa fa-check-square-o fa-lg" aria-hidden="true" style="color:red">
                </i> <p class="text-white">Blood seeker will contact you in your locality to give your blood</p>
            </div><br>

            <div class="col-lg-4 col-sm-12 text-center"><i class="fa fa-check-square-o fa-lg" aria-hidden="true" style="color:red"></i> <p class="text-white">Once you donate blood, log in to your dashboard and update your last date donation.</p>
            </div>

        </div>
        <a class="btn redback btn-lg m-5 text-white" href="signup.php" role="button">Become Donor</a>
    </div>
</section>
<section class="p-5">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 col-sm-12 mb-2 text-center">
                <h2 class="mb-5" style="color:red">Am I Eligible to Donate?</h2>
                <p class="text-muted">You may be wondering if you can donate blood.
                    Donating blood is safe and easy to do.
                    If you're in good health and meet the <a href="eligibility.php"> general eligibility criteria</a>,
                    then you are likely able to give blood.
                    If you meet all eligibility criteria below,
                    please schedule your appointment today to transform the lives of patients in need</p>

            </div>
            <div class="col-lg-6 d-none d-sm-block">
                <img src="assets/give.png" alt="" srcset="" width="100%">
            </div>

        </div>

    </div>
</section>

<?php
include_once('footer.php')
?>