<?php
   include('session.php');
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
    <h4>
          <table>
          <tr>
          <td> 
                Honors Bachelor Degree in Mechatronic Engineer 
                <br>
                High Diploma in Science Computing
            <td>
                    |
                    <br>
                    |
            </td>

        <td>
                (NFQ Level 8)
                <br>
                (NFQ Level 8)
        </td>
         <td>
                 |
                <br>
                 |
         </td>
           <td>
                Devry Brazil      
                </br>
                CCT Ireland 
            </td>
            <td>
                 |
                <br>
                |
            </td>
         </tr>
    </table>
    <hr>
        </h4>

</body>
<footer>
    <button class="button button1" onclick="myFunction()">Contact</button>
    <script>
        function myFunction() {
            window.open("logout.html");
        }
    </script>
</footer>

</html>