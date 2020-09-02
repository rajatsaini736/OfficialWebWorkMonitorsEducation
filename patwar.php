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

  .best{
    font-weight: bold;
    margin-top: 5%;
    margin-left: 3%;
  }

  .best-txt{
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

  .display-4{
  font-size: 130%;
}

  .lead{
      font-size: 100%;
    margin: 50px;
    text-align: justify;
  }

  .ssc-img{
    margin-left: 25%;
    width: 50%;
  }

  .best{
    font-weight: bold;
    margin-top: 10%;
    margin-left: 10%;
  }

  .best-txt{
    margin-top: 3%;
    margin-left: 10%;
  }

   .sub-head{
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
  top: 170%;
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
  <h2 class="display-4" style="text-align: center; font-weight: bold;">PATWAR Syllabus and Exam Pattern 2020</h2>

  <img src="./Images/img4.jpg" class="ssc-img">

  <p class="best-txt">Patwari written test will be conduct in May-June 2020. Cadidates applied for the Rajasthan Pawari Bharti 2020. Rajathan Subordinate and Ministerial services selection board have issued a new syllabus for the patwari exam 2020. </p>


  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>General Science, History, Polity and Geography of India, General knowledge, Current affairs</td>
      <td>38</td>
      <td>76</td>
    </tr>
    <tr>
      <td>Geography, History, Culture and Polity of Rajasthan.</td>
      <td>30</td>
      <td>60</td>
    </tr>
    <tr>
      <td>General English & Hindi</td>
      <td>22</td>
      <td>44</td>
    </tr>
    <tr>
      <td>Mental Ability and Reasoning, Basic Numerical Efficiency</td>
      <td>45</td>
      <td>90</td>
    </tr>
    <tr>
      <td>Basic Computer</td>
      <td>15</td>
      <td>30</td>
    </tr>
  </table>

  <p class="best-txt">The total marks obtained by a candidate in Patwari exam will be consider the order of merit list. </p>

  <p class="best-txt">Patwari exam will contain objective type question and multiple type question. There will be negative marking of 1/3 mark per each wrong question.</p>  





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