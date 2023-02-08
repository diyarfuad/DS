<?php

$conect = mysqli_connect("localhost","root", "","ABC1");

if(isset($_POST['save'])){

   $name = ($_POST['namee']);
   $email = ($_POST['wana']);
   

    $sql = "INSERT INTO  ABC12(names ,anjamaka)VALUES('$name','$email')";
    $Result = mysqli_query($conect, $sql);
if($Result==true)
{
        echo "secssfull ";
 } else{
        echo "failed";
        }
    }



?>