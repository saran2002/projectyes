<?php
include("connection.php");
$reg=$_POST["reg"];
$name=$_POST["name"];
$dep=$_POST["dep"];
$cou=$_POST["cou"];
$hob=$_POST["hob"];


$sql="INSERT INTO inse(reg,name,dep,cou,hob)VALUES('$reg','$name','$dep','$cou','$hob')";
if($conn->query($sql) === TRUE){
    echo'<script>alert("Booked Successfully")</script>';

    
    header("Location: ./insert.html");
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>