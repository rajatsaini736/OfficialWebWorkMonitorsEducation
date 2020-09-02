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
  top: 225%;
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

  <h2 class="display-4" style="text-align: center; font-weight: bold;">CSAT Overview</h2>
  <p class="lead">UPSC (union public service commision) civil services preliminary examination consists of two parts (1) General Studies - Paper 1 (2) Civil Services Aptitude Test (CSAT) - paper II. CSAT (paper II) is only a qualifying paper and a minimum of 33 % marks are required to be eligible for clearing the UPSC preliminary exam. The final selection is based on the marks of Paper I only, given the candidate has scored 33% in the CSAT (paper II) </p>


  


    <h3 class="best">Paper I syllabus</h3>
    <h3 class="sub-head">Total Marks 200, Total duration two hours, Total Question 100.</h3>
    <p class="best-txt">&rarr; Current Affairs.</p>
    <p class="best-txt">&rarr; History of India and Indian National Movement</p>
    <p class="best-txt">&rarr; Indian and World Geography</p>
     <p class="best-txt">&rarr; Economic and Social Development</p>   
     <p class="best-txt">&rarr; General issues on Environmental Ecology</p>   
     <p class="best-txt">&rarr; General Science</p>   


    <h3 class="best">CSAT (Paper II) syllabus</h3>
    <h3 class="sub-head">Total Marks 200, Total duration two hours, Total Question 80.</h3>
    <p class="best-txt">&rarr; Comprehension</p>
    <p class="best-txt">&rarr; Interpersonal skills including communication skills</p>
    <p class="best-txt">&rarr; Logical reasoning and analytical ability</p>
     <p class="best-txt">&rarr; Decision making and problem solving</p>   
     <p class="best-txt">&rarr; General mental ability</p>   
     <p class="best-txt">&rarr; Basic numeracy (numbers and their relations, orders of magnitude), Data interpretation</p>  
     <p class="best-txt">&rarr; English Language comprehension skills</p>  
     <p class="best-txt">&rarr; Questions relating to english language comprehension skills</p>   
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