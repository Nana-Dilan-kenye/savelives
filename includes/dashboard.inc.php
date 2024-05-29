<?php
include_once 'dbh.inc.php';

if(isset($_POST['update-account'])){
    $name=$_POST["name"];
                    $birthdate=$_POST["dob"];
                    $gender=$_POST["gender"];
                    $email=$_POST["email"];
                    $weight=$_POST["weight"];
                    $bloodgroup=$_POST['bloodgroup'];
                    $wanum=$_POST["num"];
                    $region=$_POST["region"];
                    $city=$_POST["city"];
                    $LastTran=$_POST["lastTran"];
                    

                    
                
                    
                    //update details
                
                    $sql="SELECT*FROM users ";
                    $query= mysqli_query($conn,$sql);
                    $queryResult= mysqli_num_rows($query);
                

                while($data=mysqli_fetch_assoc($query)){
                    if($data['userEmail']==$email){
                  $sqli="UPDATE users SET userFullname=?,userEmail=?,userWanum=?,userBloodgroup=?,userWeight=?,userGender=?,userBirth=?,userRegion=?,userCity=?,userLastTran=? WHERE userEmail=?";
            //  $query= mysqli_query($conn,$sqli);
                $stmt=mysqli_stmt_init($conn);

               if(!mysqli_stmt_prepare($stmt,$sqli)){
                header("location:../dashboard.php?error=stmtfailed");
                 exit();
                 }

            mysqli_stmt_bind_param($stmt,"sssssssssss",$name,$email,$wanum,$bloodgroup,$weight,$gender,$birthdate,$region,$city,$LastTran,$email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            header("location:../dashboard.php?sucess");
                }
       }
 }