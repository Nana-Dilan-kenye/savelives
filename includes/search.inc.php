<?php


                
             
if(isset($_POST["search"])){
                
    $region=$_POST["region"];
    // $city=$_POST["city"];
    $bloodgroup=$_POST["bloodgroup"];


function search_item($region,$bloodgroup){
        require_once 'dbh.inc.php';
        $query= mysqli_query($conn,"SELECT userRegion,userBloodgroup FROM users WHERE ");
    
        while($data=mysqli_fetch_assoc($query)){
        if($data["userRegion"]==$region && $data["userBloodgroup"]==$bloodgroup){
        echo $data["userName"]."|".$data["userWanum"]."|".$data["userBloodgroup"];
        }


        }
        echo "No match for your search!!";


    }
}

