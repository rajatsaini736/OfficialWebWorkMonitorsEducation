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
    text-align: justify;
    margin: 10px;
  }

  .ssc-img{
    margin-left: 40%;
    width: 20%;
  }

  .txt{
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
    font-size: 100%;
  }

  .subheading{
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
    font-size: 100%;
    font-weight: bold;
    margin-top: 10%;
    margin-left: 10%;
  }

  .txt{
    font-size: 40%;
    margin: 30px;
    text-align: justify;
  }

  .best-txt{
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
  top: 380%;
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
  <h2 class="display-4" style="text-align: center; font-weight: bold;">REET Syllabus and Exam Pattern 2020</h2>

  <img src="./Images/img4.jpg" class="ssc-img">

  <p class="lead">There are no negative marking in REET Exam. Level 1 REET Examination conducted for teachers of Class I to V. REET Exam Leve 2 conducted for Teachers for class VI to VIII. There are totale number question of 150 questions. The total marks alloted for this exams are 150 marks. Total duration will be allowed to finish this exam is 2 hours 30 minutes.</p>


  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>Child Development and Pedagogy</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Language I (Hindi, English, Sanskrit, Urdu, Punjabi & Gujrati)</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Language II (Hindi, English, Sanskrit, Urdu, Sindhi, Punjabi & Gujrati)</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Mathematics</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Environmental Studies</td>
      <td>30</td>
      <td>30</td>
    </tr>
  </table>

<h3 class="display-4">REET Level I Exam Pattern 2020</h3>
  <p class="lead">REET Level I exam is conducted to fulfill the post of teachers of class I to V. There are no negative marking in REET Exams. Total number of questions in REET level 1 are 150 and there marks are 150 (1 mark per each question).</p>


    <h3 class="sub-head">(1) Child Development & Pedagogy</h3>
    <p class="lead">Number of Question are 30, Maximu marks 30</p>

    <h3 class="sub-head">(2) Language I (Hindi, Sindhi, English, Sanskrit, Urdu, Pubjabi & Gujrati)</h3>
    <p class="lead">Number of Question are 30, Maximu marks 30</p>    
    <h3 class="sub-head">(3) Language II (Hindi, English, Sanskrit, Urdu, Sindhi, Punjabi & Gujrati)</h3>
    <p class="lead">Number of Question are 30, Maximu marks 30</p>    

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>Child Development and Pedagogy</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Language I (Hindi, English, Sanskrit, Urdu, Punjabi & Gujrati)</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Language II (Hindi, English, Sanskrit, Urdu, Sindhi, Punjabi & Gujrati)</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Mathematics & Science (For Maths & Science Teacher) Social Science for Social Science Teachers</td>
      <td>60</td>
      <td>60</td>
    </tr>
  </table>

<h3 class="sub-head">REET Level II Exam Pattern 2020</h3>
  <p class="lead">REET Level II exam is conducted to fulfill the post of teachers of class VI to VIII. There are no negative marking in REET Exams. Total number of questions in REET level 1 are 150 and there marks are 150 (1 mark per each question).</p>


    <h3 class="sub-head">(1) Child Development & Pedagogy</h3>
    <p class="lead">Number of Question are 30, Maximu marks 30</p>

    <h3 class="sub-head">(2) Language I (Hindi, Sindhi, English, Sanskrit, Urdu, Pubjabi & Gujrati)</h3>
    <p class="lead">Number of Question are 30, Maximu marks 30</p>    
    <h3 class="sub-head">(3) Language II (Hindi, English, Sanskrit, Urdu, Sindhi, Punjabi & Gujrati)</h3>
    <p class="lead">Number of Question are 30, Maximu marks 30</p>
    <h3 class="sub-head">(4) Mathematics & Science (For Maths & Science Teacher) Social Science for Social Science Teachers</h3>
    <p class="lead">Number of Question are 60, Maximu marks 60</p>  



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