<?php
   include('session.php');
   include('dbdepartment.php');
?>

<!DOCTYPE html>
<html>

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
<body>


<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<script type="text/javascript">
function insertdept()
{document.getElementById('divChange').innerHTML = myFunction2() ;}
</script>

<script type="text/javascript">
function searchtdept()
{document.getElementById('divSearch').innerHTML = myFunction3() ;}
</script>

<div id="divChange">Click here to view the Department table</div>
<br>
<input type='button' class="button button1" onclick='insertdept()' value='Department'/><br/>
<br>
<div id="divSearch">Click here to search in Department table</div>
<br>
<input type='button' class="button button1" onclick='searchtdept()' value='Department'/><br/>


</html>

        

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
        function myFunction3() {
            window.open("table2.php");
        }
    </script>
</footer>

</html>