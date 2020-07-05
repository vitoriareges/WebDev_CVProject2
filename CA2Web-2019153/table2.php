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

<h1>Search Employee</h1>
		
		<form method="POST" action="">
			<label>Employee number: </label>
			<input type="text" name="number" placeholder="Search"><br><br>
			
			<input name="Send" class="button button1" type="submit" value="Search">
		</form><br><br>
		
		<?php
    $Send = filter_input(INPUT_POST, 'Send', FILTER_SANITIZE_STRING);
		if($Send){
			$number = filter_input(INPUT_POST, 'number');
			$result = "SELECT emp_no, dept_no, from_date, to_date FROM dept_emp LIMIT 20";
			$result_user = mysqli_query($connection_AWS, $result);
			while($row = mysqli_fetch_assoc($result_user)){
				{
                    //output table header
                    echo "<table class='list'><tr><th>Employee Number</th><th>Department Number</th><th>FROM</th><th>TO</th></tr>";
         
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result_user)) {
                        echo "<tr><td>" . $row["emp_no"] . "</td><td> " . $row["dept_no"] . "</td><td>" . $row["from_date"] . "<td>" . $row["to_date"] .
                            "</td></tr> ";
                    }}
			}
		}
		?>

</body>


</html>