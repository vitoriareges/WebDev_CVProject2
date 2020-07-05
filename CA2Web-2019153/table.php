<?php
   include('session.php');
   include('dbdepartment.php');
?>

<!DOCTYPE html>
<html>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: cornflowerblue;
  color: white;
}
</style>
<head>
    <link rel="stylesheet" href="myStyle.css">
    <title>CV: Vitoria Regia Fernandes de Oliveira</title>
</head>

<body>

    <h1>

          <br> 
          <img 
          src= "0.jpg"  alt="Vitoria Oliveira"  />
      </h1>
    <h2>
            <br>
            <ul>
                <li><a  href="index.php">Home</a></li>
                <li><a href="abstract.php">Abstract</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="career.php">Career History </a></li>
                <li><a href="dbreview.php">Database Review </a></li>
                </ul>
            <hr>
      </h2>
     

</head>

   <?php

   $sql = "SELECT emp_no, dept_no FROM dept_emp LIMIT 20";
   $result = mysqli_query($connection_AWS, $sql);
   if (!$result) {
    printf("Error: %s\n", mysqli_error($connection_AWS));
    exit();
}

   while ($row = mysqli_fetch_array($result)) {
       //here goes the data
       if ($result) {
           //output table header
           echo "<table class='list'><tr><th>Department Name</th><th>Department Number</th></tr>";

           // output data of each row
           while ($row = mysqli_fetch_assoc($result)) {
               echo "<tr><td>" . $row["emp_no"] . "</td><td> " . $row["dept_no"] . "</td></tr> ";
           }

           echo "</table>";
       } else {
           echo "0 results";
       }
   }
  


        // close connection
        $connection_AWS->close();
        ?>


  


        

</body>
<footer>
    <button class="button button1" onclick="myFunction()">Logout</button>
    <script>
        function myFunction() {
            window.open("logout.php");
        }
        
        function myFunction2() {
            window.open("table.php");
        }
    </script>
</footer>

</html>