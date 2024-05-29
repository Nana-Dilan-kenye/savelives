<?php
include_once 'donorheader.php'

?>
<?php
include_once 'includes/functions.inc.php'
?>



<!-- <h1 style="color:chartreuse"> You logged in successfully</h1> -->

<!-- <button  class='input button' ><a href='includes/logout.inc.php' style='text-decoration:none;'>logout</a></button> -->

<form action="" method="POST" class="mt-5 pt-5 container bg-dark ">
    
    <div class="container pt-5">
        <div class="row">
            <div class="col text-white">
                <div class="form-group">
                    <label for="userRegion">Select Region</label>
                    <select class="form-control" id="userRegion" type='text' class='input' name='region'>
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
            </div>
            <div class="col text-white">
                <div class="form-group">
                    <label for="bloodGroup">Blood Group</label>
                    <select class="form-control" id="userBloodGroup" class='input'  name='bloodgroup'>
                    <option selected disabled>Select Blood Group</option>
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
            <button class="btn btn-primary mb-5" type="submit" name="search">
                Search Donor
            </button>
        </div>

</form>

<?php
include_once 'includes/functions.inc.php';


if(isset($_POST["search"])){

    $region=$_POST["region"];

    $bloodgroup=$_POST["bloodgroup"];
   

    $sql="SELECT*FROM users";
    $query= mysqli_query($conn,$sql);
    $queryResult= mysqli_num_rows($query);


    
    /*    Blood groups:O-,O+,A-,A+,B-,B+,AB-,AB+

    */
    if($queryResult>0){
      echo "<br><br><b><br>";
      echo "<table border=1; width=100%>
      <thead>
      <tr>
      <th scope='col'>Full Name</th>
      <th scope='col'>Contact</th>
      <th scope='col'>Region</th>
      <th scope='col'>City</th>
      <th scope='col'>Blood group</th>
      </tr>
      </thead>
      ";


     // $data=mysqli_fetch_assoc($query);
        while($data=mysqli_fetch_assoc($query)){
          
  
          // O- bloodgroup
          if($data['userRegion']===$region  && $bloodgroup==="O-" && eligible($data['userLastTran'],$data['userGender'])==1){
            
                if($data['userBloodgroup']==="O-"){
                  
              echo '<tr style=color:blue>
                  <td>'.$data['userFullname'].'</td>
                  <td>'.$data['userWanum'].'</td>
                  <td>'.$data['userRegion'].'</td>
                  <td>'.$data['userCity'].'</td>
                  <td>'.$data['userBloodgroup'].'</td>


              </tr>';
                }
                

           }
          
          // O+ bloodgroup
         else if($data['userRegion']===$region  && $bloodgroup==="O+" && eligible($data['userLastTran'],$data['userGender'])==1){
          
            if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+"){
          echo '<tr style=color:blue>
              <td>'.$data['userFullname'].'</td>
              <td>'.$data['userWanum'].'</td>
              <td>'.$data['userRegion'].'</td>
              <td>'.$data['userCity'].'</td>
              <td>'.$data['userBloodgroup'].'</td>


          </tr>';
            }

        }
      
        // A- bloodgroup
        else if($data['userRegion']===$region   && $bloodgroup==="A-" && eligible($data['userLastTran'],$data['userGender'])==1){
          
          if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="A-"){
        echo '<tr style=color:blue>
            <td>'.$data['userFullname'].'</td>
            <td>'.$data['userWanum'].'</td>
            <td>'.$data['userRegion'].'</td>
            <td>'.$data['userCity'].'</td>
            <td>'.$data['userBloodgroup'].'</td>


        </tr>';
          }

      }
    
      // A+ bloodgroup
      else if($data['userRegion']===$region  && $bloodgroup==="A+" && eligible($data['userLastTran'],$data['userGender'])==1){
        if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="A-" || $data['userBloodgroup']=="A+"){
          
      echo '<tr style=color:blue>
          <td>'.$data['userFullname'].'</td>
          <td>'.$data['userWanum'].'</td>
          <td>'.$data['userRegion'].'</td>
          <td>'.$data['userCity'].'</td>
          <td>'.$data['userBloodgroup'].'</td>


      </tr>';
        }

    }
  
    //B- bloodgroup
    
    else if($data['userRegion']===$region  && $bloodgroup==="B-" && eligible($data['userLastTran'],$data['userGender'])==1){
      
      if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="B-"){
        echo '<tr style=color:blue>
        <td>'.$data['userFullname'].'</td>
        <td>'.$data['userWanum'].'</td>
        <td>'.$data['userRegion'].'</td>
        <td>'.$data['userCity'].'</td>
        <td>'.$data['userBloodgroup'].'</td>
      
      
      </tr>';
      }

  }
 

  // B+ bloodgroup

  else if($data['userRegion']===$region   && $bloodgroup==="B+" && eligible($data['userLastTran'],$data['userGender'])==1){
    
    if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="B-" || $data['userBloodgroup']=="B+"){
   
       echo '<tr style=color:blue>
  <td>'.$data['userFullname'].'</td>
  <td>'.$data['userWanum'].'</td>
  <td>'.$data['userRegion'].'</td>
  <td>'.$data['userCity'].'</td>
  <td>'.$data['userBloodgroup'].'</td>


</tr>';
    }

 }
  

//AB- bloodgroup
else if($data['userRegion']===$region   && $bloodgroup==="AB-" && eligible($data['userLastTran'],$data['userGender'])==1){
  
  if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="A-" || $data['userBloodgroup']=="B-" ||  $data['userBloodgroup']=="AB-"){
echo '<tr style=color:blue>
    <td>'.$data['userFullname'].'</td>
    <td>'.$data['userWanum'].'</td>
    <td>'.$data['userRegion'].'</td>
    <td>'.$data['userCity'].'</td>
    <td>'.$data['userBloodgroup'].'</td>


</tr>';
  }

}


//AB+ bloodgroup

else if($data['userRegion']===$region  && $bloodgroup==="AB+" && eligible($data['userLastTran'],$data['userGender'])==1){
  
  if($data['userBloodgroup']==="O-" || $data['userBloodgroup']=="O+" || $data['userBloodgroup']=="A-"|| $data['userBloodgroup']=="A+" 
  
  || $data['userBloodgroup']=="B+" || $data['userBloodgroup']=="B-" ||$data['userBloodgroup']=="AB-" ||  $data['userBloodgroup']=="AB+"){
   echo '<tr style=color:blue>
    <td>'.$data['userFullname'].'</td>
    <td>'.$data['userWanum'].'</td>
    <td>'.$data['userRegion'].'</td>
    <td>'.$data['userCity'].'</td>
    <td>'.$data['userBloodgroup'].'</td>


</tr>';
  }

}
else if($data['userRegion']!==$region  && $bloodgroup!=="AB+" && eligible($data['userLastTran'],$data['userGender'])!==1){

      echo "
      <script>
       window.alert('NO DONOR FOUND'); 
      </script>
     ";
      exit();
}

        }



      
      }
  else {
    echo "No Donor available!!!";
        
 }
 echo "
 </table>
 ";
}
?>


<?php
include_once 'otherfooter.php'
?>