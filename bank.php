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
  top: 480%;
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
  <h2 class="display-4" style="text-align: center; font-weight: bold;">IBPS PO Syllabus and Exam Pattern 2020</h2>

  <img src="./Images/img4.jpg" class="ssc-img">

  <h3 class="sub-head">IBPS PO Syllabus and Exam Pattern</h3>
  <p class="lead">There is separate sectional timing for each sections in preliminary exam. Three phases will be organised : Preliminary Exam, Mains Exam and Interview process.</p>


  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>English Language</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Numerical Ability</td>
      <td>35</td>
      <td>35</td>
    </tr>
    <tr>
      <td>Reasonning Ability</td>
      <td>35</td>
      <td>35</td>
    </tr>

  </table>

  <h3 class="best">IBPS PO Preliminary Exam Pattern 2020</h3>
  <p class="best-txt">IBPS PO preliminary examination will be organised online and candidates are allocated 1 hour of time to complete the exam. It consists of 3 sections with 100 question and maximum score of 100 marks. Negative marking is 0.25 marks per each wrong question.</p>


    <h3 class="sub-head">(1) English Language</h3>
    <p class="lead">Number of Question are 30, Maximu marks 30, maximum time allotted is 20 minutes.</p>

    <h3 class="sub-head">(2) Numerical Abhility</h3>
    <p class="lead">Number of Question are 35, Maximu marks 35, and maximum time allotted is 20 minutes.</p>    
    <h3 class="sub-head">(3) Reasoning Ability</h3>
    <p class="lead">Number of Question are 35, Maximu marks 35, and maximum time allotted is 20 minutes.</p>    
        
  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>Reasoning & Computer Aptitude</td>
      <td>45</td>
      <td>60</td>
    </tr>
    <tr>
      <td>English Language</td>
      <td>35</td>
      <td>40</td>
    </tr>
    <tr>
      <td>Data Analysis and Interpretation</td>
      <td>35</td>
      <td>60</td>
    </tr>
    <tr>
      <td>General, Economy/ Banking Awareness</td>
      <td>40</td>
      <td>40</td>
    </tr>

  </table>

  <h3 class="best">IBPS PO Mains Exam Pattern 2020</h3>
  <p class="lead">PO Mains examination test candidates by their written skills. An essay and a letter will be given to candidates to write which will of 25 marks and maximum time of 30 minutes.</p>

    <h3 class="sub-head">(1) Reasoning & Computer Aptitude</h3>
    <p class="lead">Number of Question are 45, Maximu marks 60, Medium of examination are english and hindi, and maximum time allotted is 60 minutes.</p>


    <h3 class="sub-head">(2) English Language</h3>
    <p class="lead">Number of Question are 35, Maximu marks 60, Medium of examination are english only, and maximum time allotted is 40 minutes.</p>

    <h3 class="sub-head">(3) Data Analysis and Interpretation</h3>
    <p class="lead">Number of Question are 35, Maximu marks 60, Medium of examination are english and hindi, and maximum time allotted is 45 minutes.</p>    
    <h3 class="sub-head">(4) General, Economy/ Banking Awareness</h3>
    <p class="lead">Number of Question are 40, Maximu marks 40, Medium of examination are english and hindi, and maximum time allotted is 35 minutes.</p>    
    <h3 class="sub-head">(5) English Language (letter writing & essay)</h3>
    <p class="lead">Number of Question are 2, Maximu marks 25, Medium of examination are english only, and maximum time allotted is 30 minutes.</p>        



  <h3 class="best">IBPS PO 2020 Interview Process</h3>
  <p class="lead">Candidates who qualify the prelims and mains IBPS exam are finally called for the interview process. This process consiste of 100 marks and required marks to clear this round is 40% which is reduced to 35% for cadidates belonging to SC/ST/OBC/PWD categories.</p>


    <p class="lead">Final selection of the candidate to the post of Probationary Officer will be made by taking into consideration the cumulative score of Mains Exam and the interview process. The weightage of both these phases of exams will be in 80:20 respectiely.</p>




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