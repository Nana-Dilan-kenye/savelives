<?php
include_once('header_2.php');
?>
<?php
include_once 'includes/functions.inc.php'
?>

<section >
    <div class="jumbotron text-center" style="background-color:#9b9494; background-repeat: no-repeat; background-size: cover; height: 300px; width: 100%;">

        <h2 class="mt-5 pt-5">Search Donor</h2>
    </div>
</section>
<section>
    <div class="container bg-light mt-5">
        <form  action="# " method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="userRegion">Select Region</label>
                        <select class="form-control" id="userRegion" name="region" required>
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
                        <label for="bloodGroup">Blood Group</label>
                        <select class="form-control" id="userBloodGroup" name="bloodgroup" required>
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
                <button type="submit" name="search" class="btn btn-primary mb-3">
                    Search Donor
                </button>
            </div>

        </form>
    </div>
</section>



<?php


if (isset($_POST["search"])) {
    
    $region = $_POST["region"];

    $bloodgroup = $_POST["bloodgroup"];


    $sql ="SELECT * FROM users";
    $query= mysqli_query($conn,$sql);
    $queryResult = mysqli_num_rows($query);

    /*    Blood groups:O-,O+,A-,A+,B-,B+,AB-,AB+

    */
    if ($queryResult > 0) {

                   echo "
                   <div class='container text-center w-100 bg-light mb-5'>
                   <h5 class='text-dark text-center'>Available Donors</h5>
                   <div class='container'>
                    <table class='table'>
                    <thead class='table-dark'>
                        <tr>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Blood group</th>
                        </tr>
                    </thead>
                    <tbody>
                   ";
                while($data=mysqli_fetch_assoc($query)){
           

                $userName=$data["userFullname"];
                $number=$data["userWanum"];
                $bg=$data["userBloodgroup"];

                // O- bloodgroup
                if($data['userRegion']===$region  && $bloodgroup==="O-" && eligible($data['userLastTran'],$data['userGender'])==1){
                
                    if($data['userBloodgroup']==="O-"){
                        echo "
                        <tr>
                        <td>$userName</td>
                        <td>$number</td>
                        <td>$bg</td>
                        </tr>
                        ";
                    }
                    

                }
          
                // O+ bloodgroup
                else if($data['userRegion']===$region  && $bloodgroup==="O+" && eligible($data['userLastTran'],$data['userGender'])==1){
                
                    if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+"){
                                        echo "<tr><td>$userName</td><td>$number</td><td>$bg</td></tr>";
                    }

                }
      
                // A- bloodgroup
                else if($data['userRegion']===$region   && $bloodgroup==="A-" && eligible($data['userLastTran'],$data['userGender'])==1){
                
                if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="A-"){
                                    echo "<tr><td>$userName</td><td>$number</td><td>$bg</td></tr>";
                }

            }
    
            // A+ bloodgroup
            else if($data['userRegion']===$region  && $bloodgroup==="A+" && eligible($data['userLastTran'],$data['userGender'])==1){
                if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="A-" || $data['userBloodgroup']=="A+"){
                                echo "<tr><td>$userName</td><td>$number</td><td>$bg</td></tr>";
            
                }

            }
  
                //B- bloodgroup
                
            else if($data['userRegion']===$region  && $bloodgroup==="B-" && eligible($data['userLastTran'],$data['userGender'])==1){
            
            if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="B-"){
                                echo "<tr><td>$userName</td><td>$number</td><td>$bg</td></tr>";
            }
            }

            // B+ bloodgroup

            else if($data['userRegion']===$region   && $bloodgroup==="B+" && eligible($data['userLastTran'],$data['userGender'])==1){
                
                if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="B-" || $data['userBloodgroup']=="B+"){
            
                                echo "<tr><td>$userName</td><td>$number</td><td>$bg</td></tr>";
            }
            }
  

            //AB- bloodgroup
            else if($data['userRegion']===$region   && $bloodgroup==="AB-" && eligible($data['userLastTran'],$data['userGender'])==1){
            
            if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="A-" || $data['userBloodgroup']=="B-" ||  $data['userBloodgroup']=="AB-"){
                                echo "<tr><td>$userName</td><td>$number</td><td>$bg</td></tr>";
            }

            }


            //AB+ bloodgroup

            else if($data['userRegion']===$region  && $bloodgroup==="AB+" && eligible($data['userLastTran'],$data['userGender'])==1){
            
            if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="A-"|| $data['userBloodgroup']=="A+" 
            
            || $data['userBloodgroup']=="B+" || $data['userBloodgroup']=="B-" ||$data['userBloodgroup']=="AB-" ||  $data['userBloodgroup']=="AB+"){
                                echo "<tr><td>$userName</td><td>$number</td><td>$bg</td></tr>";
            }

            }
           
        }

        echo "
        </body>
        </table>
        </div>
        </div>
        ";
     }  
        
    else {
      echo "No Donor available!!!";
          
   }
}

?>

<?php
include_once('footer.php')
?>