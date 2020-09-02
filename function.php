<?php


function navbar(){
	echo '

<div class="top-navbar" id=navcontainer>

<div class="dropdown">
      <a class="dropbtn" href="index.php"> HOME</a>
</div>

<div class="dropdown">
  <button class="dropbtn">COURSES</button>
  <div class="dropdown-content">
  <a href="ssc.php">SSC</a>
  <a href="railway.php">Railway</a>
  <a href="bank.php">Bank</a>
  <a href="cds.php">CDS</a> 
  <a href="patwar.php">Patwar</a>  
    <a href="ldc.php">LDC</a> 
  <a href="1stgrade.php">1st Grade</a> 
  <a href="2ndgrade.php">2nd Grade</a> 
  <a href="reet.php">REET</a>
  <a href="csat.php">CSAT</a> 
  <a href="ras.php">RAS</a>
  <a href="rajpolice.php">Raj. Police</a>
  <a href="delhipolice.php">Delhi Police</a>     

  </div>
</div>';
  
    if(!empty($_SESSION["admin"])){
      echo '
          <div class="dropdown">
            <button class="dropbtn">UPLOAD</button>
                <div class="dropdown-content">
                <a href="upload_material.php">Upload Material</a>
                <a href="upload_gallery.php">Upload Gallery</a>
                </div>               
          </div>
              <div class="dropdown">
        <button class="dropbtn">DOWNLOAD</button>
                <div class="dropdown-content">
                <a href="download_material.php">Download Material</a>
                <a href="download_gallery.php">Download Gallery</a>
                </div>   
    </div>
      <div class="dropdown">
            <a class="dropbtn" href="list_user.php"> USER LIST</a>
      </div>
      ';
    }
    else{
        echo '
    <div class="dropdown">
         <button class="dropbtn">DOWNLOAD</button>
                <div class="dropdown-content">
                <a href="download_material.php">Download Material</a>
                <a href="download_gallery.php">Download Gallery</a>
                </div>   
    </div>
    ';
}
echo '
<div class="dropdown">
  <button class="dropbtn">YOUTUBE GALLERY</button>
  <div class="dropdown-content">
  <a href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Number System </a>
  <a href="https://www.youtube.com/playlist?list=PLMs-Aebay8j2Lldfi7fThEmfiCYnPqyMZ">Ratio & Proportions</a>
  <a href="https://www.youtube.com/playlist?list=PLMs-Aebay8j37RssEnWZ0n1LYVE0o4yw0">Percent</a>
  <a href="https://www.youtube.com/playlist?list=PLMs-Aebay8j20TbEQZB5MylZEF1rECl6j">Average</a>  
  <a href="https://www.youtube.com/playlist?list=PLMs-Aebay8j2ggrnCNxwnEW-MbX2y2G-O">Simplification</a>    
  </div>
</div>

<div class="dropdown">
      <a class="dropbtn" href="download_gallery.php"> GALLERY</a>
  </div>

<div class="dropdown">
  <button class="dropbtn">CONTACT US</button>
  <div class="dropdown-content">
    <a href="tel:919314603490" class="call-cont"><i class="fa fa-phone" style="font-size:20px;color:black"></i> Call Us</a>
    
    <a href="https://wa.me/919413590825?text=I%20am%20interested%20in%20your%20coaching%20classes" class="chat-cont"><i class="fa fa-whatsapp" style="color: green; font-size: 20px;"></i> Chat With Us</a>
  
    <a href = "mailto: deshwaleducation54@gmail.com" class="gmail-cont"><i class="fa fa-envelope" style="color: red; font-size: 20px;"></i> Mail Us</a>
  </div>

</div>';

 

  if(!empty($_SESSION['name'])){

    echo '

        <div class="dropdown">
            <a class="dropbtn" href="#">'.$_SESSION["name"].'</a>
  </div>

      <div class="dropdown">
        <a class="dropbtn" href="index.php?id=log_out">LOGOUT</a>
  </div>

    ';

  }
  else{
    echo '

    <div class="dropdown">
      <a class="dropbtn" href="login.php"> LOGIN</a>
  </div>

<div class="dropdown">
      <a class="dropbtn" href="signup.php"> SIGNUP</a>
  </div>

  ';  
  }


echo '
  <div class="toggle-icon">
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
  </div>

</div>

  <div class="nav-container">
  
  <img src="./Images/monitors.png" class="banner-img">

      <div class="Monitors-logo">
    <a href="index.php" ><img src="./Images/logo.png" class="Mlogo"></a>
  </div>


  <div class="tag-line">
  <div class="tag-word">Think</div>
    <div class="tag-word">Government</div>
      <div class="tag-word">Exam,</div>
        <div class="tag-word">Think</div>
          <div class="tag-word">Monitors</div>
  	    
  </div>

  <div class="mini-tag-line">
  	Connect - Learn - Prepare
  </div>

  <div class="sub-tag-line">
  	The More You Practice The Luckier You Get
  </div>

</div>

 	';
}

function footer(){
	echo '<footer>

<div class="ftr-1">
  <div class="ft-pad"><b>ADDRESS :</b></div>
  <div class="ft-pad">54 ARJUN NAGAR NORTH</div>
  <div class="ft-pad">NEAR GOPALPURA BYPASS</div>
  <div class="ft-pad">JAIPUR-302015.</div>
</div>

<div class="ftr-2">
  <div class="ft-pad"><b>ABOUT US</b></div>
  <div class="ft-pad"><b>PRIVACY POLICY</b></div>
  <div class="ft-pad"><b>TERMS & CONDITIONS</b></div>
  
</div>

<div class="ftr-3">
  <div class="ft-pad"><b>&copy Monitors</b></div>
  <div class="ft-pad"><b>LIKE ON US</b></div>
  <div class="ft-pad"><span><a href="https://www.facebook.com/MonitorsEducationGroup" class="fa fa-facebook"></a></span><span><a href="https://www.linkedin.com/in/monitors-education-group-6006051b0/" class="fa fa-linkedin"></a></span><span><a href="https://twitter.com/GroupMonitors" class="fa fa-twitter"></a></span><span><a href="https://www.instagram.com/monitorseducationgroup/" class="fa fa-instagram"></a></span></div>
</div>


</footer>';
}

?>