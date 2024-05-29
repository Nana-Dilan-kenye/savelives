<?php
include_once('header.php');
?>
<!-- Section -->
<section>
    <div class="container-fluid decolor">
        <div class="row text-align-center">
            <div class="col m-5">
                <h4 class="mt-5 text-white">A Drop of water makes ocean. <br> A unit of blood can SAVE LIVES.</h4>
            </div>
            <div class="col mt-5 text-center">

            </div>
            <div class="col mt-5 text-center">
                <div class="number text-center bg-primary">
                    <h5 class="pt-5">512+ <br>Active Donors</h5>
                </div>
                <br><br>
            </div>
        </div>
    </div>
    <form  action="#" method="post">
    <div class="container bg-light">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="userRegion">Select Region</label>
                    <select class="form-control"  name="region">
                            <option value="" selected disabled>Select Region</option>
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
            </div>
            <div class="col">
                <div class="form-group">
                    <label >Blood Group</label>
                    <select class="form-control" name="bloodgroup">
                    <option value="" selected disabled>Select Blood Group</option>
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
            </div>
        </div>

        <div class="col text-center">
            <br>
            <button type="submit" name="search" class="btn btn-primary mb-5">
                Search Donor
            </button>
        </div>
</form>
        <!-- Modal -->

        <!-- <div class='modal fade' id='searchDonor' tabindex='-1' role='dialog'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title text-center' id='exampleModalLabel'></h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        There are no donors around your area for the moment.
                    </div>
                    <div class='modal-footer text-center'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class='modal fade' id='searchDonor' tabindex='-1' role='dialog'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header '>
                        <h5 class='modal-title w-100 text-center p-2' style='color:orange;' id=''>Pay platform charge to get donor contact
                            information</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>
                    <div class='modal-body'>
                        <div class='text-center'>
                            <div class=' text-center bg-info'>
                                <h2 class='fw-700 pt-4'>12</h2>
                                <h5 class='pb-4'><br>Donors around you</h5>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div class='mb-3 text-center'>

                        <button class='pay-with-zitopay' data-amount='1000' data-currency='XAF' data-receiver='micahanji' data-memo='Donor contact' style='border:1px solid transparent;font-weight:400;display:inline-block;text-align:right;text-decoration:none;
                color:#fff;background-color:#337ab7;border-color:#2e6da4;
                padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px;'>
                            Pay With ZitoPay</button>>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->

    </div>


</section>


<?php

if(isset($_POST["search"])) {
    
    
    include_once 'includes/dbh.inc.php';

    $region = $_POST["region"];

    $bloodgroup = $_POST["bloodgroup"];


    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($query);
    GLOBAL $count;



    /*    Blood groups:O-,O+,A-,A+,B-,B+,AB-,AB+ */
    if ($queryResult > 0) {


        while($data=mysqli_fetch_assoc($query)){


            // O- bloodgroup
            if($data['userRegion']===$region  && $bloodgroup==="O-" && eligible($data['userLastTran'],$data['userGender'])==1){
              
                  if($data['userBloodgroup']==="O-"){
               $count++;
                  }
                  
  
             }
            
            // O+ bloodgroup
           else if($data['userRegion']===$region  && $bloodgroup==="O+" && eligible($data['userLastTran'],$data['userGender'])==1){
            
              if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+"){
                 $count++;
              }
  
          }
        
          // A- bloodgroup
          else if($data['userRegion']===$region   && $bloodgroup==="A-" && eligible($data['userLastTran'],$data['userGender'])==1){
            
            if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="A-"){
                $count++;
            }
  
        }
      
        // A+ bloodgroup
        else if($data['userRegion']===$region  && $bloodgroup==="A+" && eligible($data['userLastTran'],$data['userGender'])==1){
          if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="A-" || $data['userBloodgroup']=="A+"){
            $count++;
      
          }
  
      }
    
      //B- bloodgroup
      
      else if($data['userRegion']===$region  && $bloodgroup==="B-" && eligible($data['userLastTran'],$data['userGender'])==1){
        
        if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="B-"){
         $count++;
    }
   }
  
    // B+ bloodgroup
  
    else if($data['userRegion']===$region   && $bloodgroup==="B+" && eligible($data['userLastTran'],$data['userGender'])==1){
      
      if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="B-" || $data['userBloodgroup']=="B+"){
     
       $count++;
    }
   }
    
  
  //AB- bloodgroup
  else if($data['userRegion']===$region   && $bloodgroup==="AB-" && eligible($data['userLastTran'],$data['userGender'])==1){
    
    if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="A-" || $data['userBloodgroup']=="B-" ||  $data['userBloodgroup']=="AB-"){
       $count++;
    }
  
  }
  
  
  //AB+ bloodgroup
  
  else if($data['userRegion']===$region  && $bloodgroup==="AB+" && eligible($data['userLastTran'],$data['userGender'])==1){
    
    if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="A-"|| $data['userBloodgroup']=="A+" 
    
    || $data['userBloodgroup']=="B+" || $data['userBloodgroup']=="B-" ||$data['userBloodgroup']=="AB-" ||  $data['userBloodgroup']=="AB+"){
      $count++;
    }
  
  }
  else if($data['userRegion']!==$region  && $bloodgroup!=="AB+" && eligible($data['userLastTran'],$data['userGender'])!==1){
  
        echo "
        <div class='container w-50 h-50 text-center '>
    <p class=' mb-5 text-warning'>*There are no donors around your area for the moment*</p>
   </div>
       ";
        exit();
  }
  
          }
          //echo success
          echo "
          <div class='container text-center w-50 bg-light mb-5'>
          <h5 class='text-warning'>Pay platform charge to get donor contact information</h5>
          <div class='mt-4 mb-4 bg-info'>
              <h3 class='mt-4 p-3 fw-700'>$count</h3>
              <p class='pb-4'>Donors around you</p>
          </div>
      
          <button class='pay-with-zitopay text-center mb-4' data-amount='1000' data-currency='XAF' data-receiver='micahanji' data-memo='Donor contact' style='border:1px solid transparent;font-weight:400;display:inline-block;text-align:right;text-decoration:none;
                          color:#fff;background-color:#337ab7;border-color:#2e6da4;
                          padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px;'>
              Make Payment</button>
      
       </div>
       ";
        exit();
  
  
  
     }       
        
    else {
      echo "No Donor available!!!";
          
   }
}

?>
<!-- <script src='https://zitopay.africa/assets/js/payment.js?v=0007' async></script> -->
<?php
include_once('footer.php')
?>