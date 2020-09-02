<?php
session_start();
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Monitors</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">


<!-- FA FA-Bars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<style type="text/css">
    .lead{

    margin: 50px;
    text-align: justify;
  }
  .ssc-img{
    margin-left: 40%;
    width: 20%;
  }

  .best-txt{
    margin: 50px;
    text-align: justify;
  }

  .best{
    font-weight: bold;
    margin-top: 5%;
    margin-left: 3%;
  }

  .best-best-txt{
    margin-top: 1%;
    margin-left: 3%;
  }

  .sub-head{
    margin-left: 3%;
  }
table{
  width: 50%;
  margin-left: 25%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

@media screen and (max-width: 600px){
    .lead{
      font-size: 100%;
    margin: 50px;
    text-align: justify;
  }

  .display-4{
  font-size: 130%;
}

  .ssc-img{
    margin-left: 25%;
    width: 50%;
  }

  .best{
    font-size: 100%;
    font-weight: bold;
    margin-top: 10%;
    margin-left: 10%;
  }

  .best-txt{
    margin-top: 3%;
    margin-left: 10%;
  }

  .best-best-txt{
    font-size: 100%;
    margin-top: 3%;
    margin-left: 10%;
  }

   .sub-head{
    font-size: 100%;
    margin-left: 10%;
  }
  table{
  width: 100%;
  margin-left: 1%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

footer{
    background-color: #00001a;
    color: white;
  top: 200%;
  height: 50%;
  position: initial;
  display: block;
  padding: 1%;
  width: 101%;
  margin-left: 0%;
  margin-right: -5%;
}

}

</style>
</head>
<body>


<?php
navbar();
?>

<div class="jumbotron">


  <h3 class="best">CDS Syllabus 2020: Overview</h3>
  <p class="best-txt">The Union Public Service Commision (UPSC) conducts CDS ( combiner defence services ) exam twice a year for recruiting candidates for the indian military academy, officers training academy, indian naval academy and indian air force academy.</p>

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Mode of Exam</th>
      <th style="text-align: left;">Offline</th>
    </tr>
    <tr>
      <td>Number of Sections</td>
      <td>Indian military academy(IMA), Indian Naval Academy(INA) and Air force academy(AFA)-Three officers training academy(OTA)- Two</td>
    </tr>
    <tr>
      <td>Total marks of the test</td>
      <td>IMA, INA and AFA - 300 OTA - 200</td>
    </tr>
    <tr>
      <td>Nature of question</td>
      <td>Objective type</td>
    </tr>
    <tr>
      <td>duration of the test</td>
      <td>2 hours for each section of test</td>
    </tr>    

  </table>

<h3 class="best">CDS Exam Pattern for IMA, INA, AFA</h3>

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Duration</th>
      <th style="text-align: left;">Maximum Marks</th>
    </tr>
    <tr>
      <td>English</td>
      <td>2 hours</td>
      <td>100</td>
    </tr>
    <tr>
      <td>General knowledge</td>
      <td>2 hours</td>
      <td>100</td>
    </tr>
    <tr>
      <td>Elementary Mathematics</td>
      <td>2 hours</td>
      <td>100</td>
    </tr>

  </table>

<h3 class="best">CDS Exam Pattern for OTA</h3>

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Duration</th>
      <th style="text-align: left;">Maximum Marks</th>
    </tr>
    <tr>
      <td>English</td>
      <td>2 hours</td>
      <td>100</td>
    </tr>
    <tr>
      <td>General knowledge</td>
      <td>2 hours</td>
      <td>100</td>
    </tr>

  </table>

  <h3 class="best">CDS Syllabus 2020: Marking Scheme</h3>
  <p class="lead">Negative mark of 1/3 will be deducted for each wrong answer.</p>

   

</div>

<?php
footer();
?>











<script>
  
function myFunction(){
  var x = document.getElementById("navcontainer");
  if(x.className == "top-navbar"){
    x.className += " responsive";
  }
  else{
    x.className = "top-navbar";
  }

}

</script>

</body>
</html>