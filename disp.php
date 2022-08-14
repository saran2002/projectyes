<html>
<head>
        <style>
        table{
            border-style:solid;
            border-width:2px;
            border-color:purple;
            background-color: aliceblue;
        }
        </style>
 
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="./book.css">
</head>
 
<body style="background-image:url(bg1.png)">
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <section class="container-fluid">
    
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4">
      <center><?php
                 $reg=$_POST["reg"];
                 include("connection.php");
                 $sql="SELECT * FROM inse where reg=$reg";
                
                 echo "<br><br><br><br>
                 <h2>HISTORY</h2>
                 <table border='1'> 
                 <tr>
                 
                 <th>reg</th>
                 <th>name</th>
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
?></center>
      </section>
    </section>
  </section>
 
</body>
</html>