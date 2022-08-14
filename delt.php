<?php
include("connection.php");
//$tno=$_POST["tno"];
$reg=$_POST["reg"];
$sql="DELETE FROM inse where reg=$reg";
if($conn->query($sql) === TRUE)
{
    echo'<script>alert("Tickect Cancelled Successfully")</script>';
    header("Location: ./delt.html");
    
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>
