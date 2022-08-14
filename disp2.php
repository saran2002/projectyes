<html>
    <head>
        <style>
        table{
            border-style:solid;
            border-width:2px;
            border-color:black;
            background-color:white;  
        }
        
        </style>
        </head>
        <body style="background-color:snow;"><center>
            
            <?php
                 include("connection.php");
                 $sql="SELECT * FROM inse order by reg";
                 
                
                 echo "<br><br><br><br>
                 <h2>HISTORY</h2>
                 
                 <table border='1'> 
                 <tr>
                 <th>reg</th>
                 <th>Name</th>
                 <th>dep</th>
                 <th>cou</th>
                 <th>hob</th>
                 </tr>";
                 $result=$conn->query($sql);
                 if($result->num_rows>0){
    while ($rows=$result->fetch_assoc()){
        echo "<tr>";
        
        echo "<td>" . $rows['reg'] . "</td>";
        echo "<td>" . $rows['name'] . "</td>";
        echo "<td>" . $rows['dep'] . "</td>";
        echo "<td>" . $rows['cou'] . "</td>";
        echo "<td>" . $rows['hob'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<table>";
    echo "error: ". $sql . "<br>" .$conn->error; 
}
$conn->close();
?>

</center>
        </body>
</html>


