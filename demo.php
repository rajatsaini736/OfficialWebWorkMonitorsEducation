<?php

session_start();
include('db.php');
include('function.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <style type="text/css">

  </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
.dropbtn {
  border-radius: 10px;
  margin-right: 10px;
  background-color: #f2f2f2;
  color: darkblue;
  padding: 10px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: lightgrey;
}
</style>
</head>
<body>

<?php 
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
$sql = "SELECT `name`,`email`,`mobile` FROM `user_info` ORDER BY `uid` DESC";
    $result = $conn->query($sql);
    echo '<h2 class="pdf-head">User List</h2>';
    #matching password with database
    if($result->num_rows>0)
    {
      echo '<table border="1">';
      //make the column headers what you want in whatever order you want
      echo '<tr><th>Field Name 1</th><th>Field Name 2</th><th>Field Name 3</th></tr>';
      //loop the query data to the table in same order as the headers
      while ($row = mysqli_fetch_assoc($result)){
          echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td></tr>";
      }
      echo '</table>';
    }

?>




<!-- 
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-3">        
          <div class="lt-prog-content1">
          <div class="lt-prog-des">Quick Guide : Complete REET Crash Course Available on Monitors</div>
          <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Watch More...</a></div>
          </div>
        </div>
        
        <div class="col-3">
          <div class="lt-prog-content2">
          <div class="lt-prog-des">Quick Start to SSC Competition Exam Only on Monitors Publications.</div>
          <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j1UiWGwY4FDRqSJmkQp9Am-">Watch More...</a></div>
         </div>
        </div>
      
      </div>
    </div>

    <div class="carousel-item">
      <img src="./Images/logo.png" class="d-block w-100" alt="...">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 -->
</body>
</html>




  <!-- <div class="sc-prog-content1">
    <div class="sc-prog-des1">Watch Er. Satish Deshwal Sir</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Watch More...</a></div>
  </div>

  <div class="sc-prog-content2">
    <div class="sc-prog-des2">Watch Anywhere, Anytime</div>
    <div class="sc-prog-heading2">YouTube</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/channel/UCvO3yPdPJu4OvlEP30uhyzA">Watch More...</a></div>
  </div>

  <div class="sc-prog-content3">
    <div class="sc-prog-des3">Check Distance Learning Programme</div>
    <div class="sc-prog-heading3">Distance Learning Programme (DLP)</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/channel/UCvO3yPdPJu4OvlEP30uhyzA">Watch More...</a></div>
  </div>

  <div class="sc-prog-content4">
    <div class="sc-prog-des4">Check Monitors LCM & HCF Problems</div>
    <div class="sc-prog-heading4">HCF & LCM</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j3BkM0YE8PPtbYpeexidlCp">Watch More...</a></div>
  </div>

  <div class="sc-prog-content5">
    <div class="sc-prog-des5">Check Out Monitors Square Root Problems</div>
    <div class="sc-prog-heading5">Square Root</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j2QS0u3I6qhx1h3x7KzPs4N">Watch More...</a></div>
  </div>

  <div class="sc-prog-content6">
    <div class="sc-prog-des6">Check Out Monitors Average Problems</div>
    <div class="sc-prog-heading6">Average</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j20TbEQZB5MylZEF1rECl6j">Watch More...</a></div>
  </div> -->


  <!--   <div class="lt-prog-content1">
    <div class="lt-prog-des">Complete REET Crash Course</div>
    <div class="lt-prog-heading">REET</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Watch More...</a></div>
  </div>

  <div class="lt-prog-content2">
    <div class="lt-prog-des">Complete   SSC Crash Course</div>
    <div class="lt-prog-heading">SSC</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j1UiWGwY4FDRqSJmkQp9Am-">Watch More...</a></div>
  </div>

  <div class="lt-prog-content3">
    <div class="lt-prog-des">Complete BANK Crash Course</div>
    <div class="lt-prog-heading">BANK</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j2Lldfi7fThEmfiCYnPqyMZ">Watch More...</a></div>
  </div>

  <div class="lt-prog-content4">
    <div class="lt-prog-des">Complete PATWAR Course</div>
    <div class="lt-prog-heading">PATWAR</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0pZSyHSIJkFyn235buCgrS">Watch More...</a></div>
  </div>

  <div class="lt-prog-content5">
    <div class="lt-prog-des">Best   RAILWAY Course</div>
    <div class="lt-prog-heading">RAILWAY</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j37RssEnWZ0n1LYVE0o4yw0">Watch More...</a></div>
  </div>

  <div class="lt-prog-content6">
    <div class="lt-prog-des">Complete RPSC Crash Course</div>
    <div class="lt-prog-heading">RPSC</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j20TbEQZB5MylZEF1rECl6j">Watch More...</a></div>
  </div>
 -->
