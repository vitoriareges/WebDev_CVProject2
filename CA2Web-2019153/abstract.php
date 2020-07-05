<?php
   include('session.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>CV: Vitoria Regia Fernandes de Oliveira</title>
</head>

<link rel="stylesheet" href="myStyle.css">

<body>
	<h1>
          
          <br> 
          <img 
          src= "0.jpg"  alt="Vitoria Oliveira"  />
      </h1>
	<h2>
            <br>
            <ul>
                <li><a href="index.php">Home</a></li>
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
           <br><b>Mechatronic Engineering</b> . English advanced, Spanish Intermediate, fluent Portuguese.
            BEng MIEI member at Engineers Ireland.
           </br>
            Career developed in Industrial Maintenance field, with <b>4 years experience</b> in failure analysis, maintenance management, continuous improvement with emphasis on the DMAIC tool for high-quality processes and Kaizen, development of TPM staff, reporting and technical documentation.
            Quality internal auditor, working in line to improve the process reliability with focus on machinary and process.
            </br>
            I love work on team and i have experience as a team leader for more than 4 years. I have attended internal and external audit working to make the processes aligned to standard and clients specifieds requirements. Working always in a collaborative manner, focused on time management and very results oriented.
            <br>
            Hard work with industry process e quality among other activities, acting in line policies and objectives of the organization.
      </br></td>
      <td> <img
        src = "roboto_animation_dribbble.gif" width="450" height="300"/> </td> </tr>
    </table>
    <hr>
        </h4>
</body>
<footer>
    <button class="button button1" onclick="myFunction()">Logout</button>
    <script>
      function myFunction() {
                             window.open("logout.php");
                            }
    </script>
  </footer>
</html>