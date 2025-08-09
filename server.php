<?php
$HOSTNAME='wp.kongu.edu';
$USERNAME='24itb29';
$PASSWORD='24itb29';
$DATABASE='24itb29';
    $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
    if($con){
        echo "";
    }
    else{
        die($con);
    }
?>
