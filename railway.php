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
  top: 500%;
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


  <h3 class="best">RRB NTPC Syllabus & Exam Pattern</h3>
  <p class="best-txt">RRB NTPC 2020 will be conducted in two stages (1) Prelims and (2) Mains. Both the exams have the same syllabus. They are generally differ by their exam patter.</p>

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>Mathematics</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>General Intelligence and Reasoning</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>General Awareness</td>
      <td>40</td>
      <td>40</td>
    </tr>

  </table>

  <h3 class="best">RPB NTPC Syllabus for Stage I CBT</h3>
  <p class="best-txt">The total number of 100 questions will be given in stage I exam.</p>

    <h3 class="sub-head">(1) RRB NTPC Syllabus : Mathematics</h3>
    <p class="best-txt">Number System, Decimals, Fractions, LCM, HCF, Ratio and Proportions, Percentage, Mensuration, Time and Work, Time and Distance, Simple and Compound Interest, Profit and Loss, Elementary Algebra, Geometry and Trigonometry, Elementary Statistics etc.</p>


    <h3 class="sub-head">(2) RRB NTPC Syllabus: General Intelligence and Reasoning</h3>
    <p class="best-txt">Analogies, Completion of Number and Alphabetical Series, Coding and Decoding, Mathematical Operations, Similarities and Differences, Relationships, Analytical Reasoning, Syllogism, Jumbling, Venn Diagrams, Puzzle, Data Sufficiency, Statement- Conclusion, Statement- Courses of Action, Decision Making, Maps, Interpretation of Graphs etc.</p>

    <h3 class="sub-head">(3) RRB NTPC Syllabus: General Awareness</h3>
    <p class="best-txt">Current Events of National and International Importance, Games and Sports, Art and Culture of India, Indian Literature, Monuments and Places of India, General Science and Life Science (up to 10th CBSE), History of India and Freedom Struggle, Physical, Social and Economic Geography of India and World, Indian Polity and Governance- constitution and political system, General Scientific and Technological Developments including Space and Nuclear Program of India, UN and Other important World Organizations, Environmental Issues Concerning India and World at Large, Basics of Computers and Computer Applications, Common Abbreviations, Transport Systems in India, Indian Economy, Famous Personalities of India and World, Flagship Government Programs, Flora and Fauna of India, Important Government and Public Sector Organizations of India, Current GK etc.</p>    

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Number of Question</th>
      <th style="text-align: left;">Total Marks</th>
    </tr>
    <tr>
      <td>Mathematics</td>
      <td>35</td>
      <td>35</td>
    </tr>
    <tr>
      <td>General Intelligence and Reasoning</td>
      <td>35</td>
      <td>35</td>
    </tr>
    <tr>
      <td>General Awareness</td>
      <td>50</td>
      <td>50</td>
    </tr>

  </table>

  <h3 class="best">RPB NTPC Syllabus for Stage II CBT</h3>
  <p class="best-txt">The Questions will be of objective type with multiple choices and are likely to include questions pertaining to:</p>

    <h3 class="sub-head">(1) Mathematics Syllabus for RRB NTPC</h3>
    <p class="best-txt">Elementary Algebra, Geometry and Trigonometry, Elementary Statistics, Number System, Decimals, Fractions, LCM, HCF, Ratio and Proportions, Percentage, Mensuration, Time and Work, Time and Distance, Simple and Compound Interest, Profit and Loss etc.</p>


    <h3 class="sub-head">(2) General Intelligence and Reasoning Syllabus for RRB NTPC</h3>
    <p class="best-txt">Analogies, Data Sufficiency, Statement- Conclusion, Statement- Courses of Action, Decision Making, Completion of Number and Alphabetical Series, Coding and Decoding, Mathematical Operations, Similarities and Differences, Relationships, Analytical Reasoning, Syllogism, Jumbling, Venn Diagrams, Puzzle, Maps, Interpretation of Graphs etc.</p>

    <h3 class="sub-head">(3) General Awareness Syllabus for RRB NTPC</h3>
    <p class="best-txt">Current Events of National and International Importance (Current Affairs), Games and Sports, Art and Culture of India, Indian Literature, Monuments and Places of India, General Science and Life Science (up to 10th CBSE), History of India and Freedom Struggle, Physical, Social and Economic Geography of India and World, Indian Polity and Governance- constitution and political system, Common Abbreviations, Transport Systems in India, Indian Economy, Famous Personalities of India and World, Flagship Government Programs, General Scientific and Technological Developments including Space and Nuclear Program of India, UN and Other important World Organizations, Environmental Issues Concerning India and World at Large, Basics of Computers and Computer Applications, Flora and Fauna of India, Important Government and Public Sector Organizations of India etc.</p>    



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