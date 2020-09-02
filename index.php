<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


include('function.php');

if(!empty($_GET["id"])){
    $_SESSION["name"] = "";
	$_SESSION['email'] = "";
  $_SESSION['admin'] = "";
}

if (!empty($_POST["Submit"])) {
echo '<meta http-equiv="refresh" content="1; URL=https://wa.me/919314603490?text=I%20am%20'.$_POST["name"].'%20from%20'.$_POST["city"].'%20interested%20in%20your%20coaching.%20 My%20email%20and%20mobile%20number%20are%20'.$_POST["email"].'%20and%20'.$_POST["mobile"].'"/>';
}

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



</head>
<body style="font-family: "Times New Roman", Times, serif;">
        



<?php

navbar();
?>

<div class="img-scroller">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/slider1.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/slider2.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/slider3.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/slider4.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/slider5.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
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
</div>


<div class="latest-program-container">
	<h3 class="lt-pro-heading">Monitors Latest Plans</h3>
  <h6 class="lt-pro-shead">Scroll to check more plans</h6>
 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">        
                <div class="plan-container1">
                  
                  <div class="heading-cont1">REET Mathematics</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Satish Deshwal Sir</div>

                  <hr class="line" >

                  <div class="price">Price : 999/-</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : REET Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Hours : 45+ Hours</div>
                  
                  </div>

                    <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-danger">Explore</button>
                      </div>
                    </div>

                </div>
            </div>
            
            <div class="col-3">
                <div class="plan-container2">
                  
                  <div class="heading-cont2">REET Mathematics</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Satish Deshwal Sir</div>

                  <hr class="line" >

                  <div class="price">Price : 999/-</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : REET Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Hours : 45+ Hours</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-info">Explore</button>
                      </div>
                    </div>

                </div>
            </div>
          
          </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="plan-container3">
                  
                  <div class="heading-cont3">REET Mathematics</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Satish Deshwal Sir</div>

                  <hr class="line" >

                  <div class="price">Price : 999/-</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : REET Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Hours : 45+ Hours</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-warning">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
              
              <div class="col-3">
                <div class="plan-container4">
                  
                  <div class="heading-cont4">REET Mathematics</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Satish Deshwal Sir</div>

                  <hr class="line" >

                  <div class="price">Price : 999/-</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : REET Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Hours : 45+ Hours</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-success">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
            
            </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="plan-container5">
                  
                  <div class="heading-cont5">REET Mathematics</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Satish Deshwal Sir</div>

                  <hr class="line" >

                  <div class="price">Price : 999/-</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : REET Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Hours : 45+ Hours</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-primary">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
              
              <div class="col-3">
                <div class="plan-container6">
                  
                  <div class="heading-cont6">REET Mathematics</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Satish Deshwal Sir</div>

                  <hr class="line" >

                  <div class="price">Price : 999/-</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : REET Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Hours : 45+ Hours</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-dark">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
            
            </div>
        </div>

      </div>
    </div>

</div>

<div class="whats-new-container">

  <h3 class="w-n-cont-heading">Recently Uploads On Monitors</h3>

  <div class="whats-new-eng">
      <div class="eng-heading"> What's New</div>
      
      <div class="eng-cont-date">June 12, 2020</div>
      <a href="https://www.youtube.com/watch?v=bBrzUNLsn5s" class="eng-cont-txt">Decimal Fraction Part 01 Maths By Er. Satish Deshwal.</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">June 11, 2020</div>
      <a href="https://www.youtube.com/watch?v=u3rM6RnCj-E" class="eng-cont-txt">Number System Part 10 Maths By Er. Satish Deshwal.</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">June 09, 2020</div>
      <a href="https://www.youtube.com/watch?v=vT1FMQ0ajPI" class="eng-cont-txt">Number System Part 08 Maths By Er. Satish Deshwal.</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">June 08, 2020</div>
      <a href="https://www.youtube.com/watch?v=B4Widr4pN2o" class="eng-cont-txt">Number System Part 07 Maths By Er. Satish Deshwal.</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">June 06, 2020</div>
      <a href="https://www.youtube.com/watch?v=WIlQFlbTEH0" class="eng-cont-txt">Number System Part 06 Maths By Er. Satish Deshwal.</a>
      <hr class="w-n-line">

  </div>

</div>


<div class="second-program-container">

  <h3 class="lt-pro-heading">Monitors Crash Courses</h3>
  <h6 class="lt-pro-shead">Scroll to check more courses</h6>

    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">        
              <div class="sc-prog-content1">
                  <div class="lt-prog-des">Watch Er. Satish Deshwal Sir's Live Classes</div>
                  <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Watch More...</a></div>
                </div>
            </div>
            
            <div class="col-3">
              <div class="sc-prog-content2">
                <div class="lt-prog-des">Watch Anywhere, Anytime Monitor's Videos</div>
                <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/channel/UCvO3yPdPJu4OvlEP30uhyzA">Watch More...</a></div>
              </div>
            </div>
          
          </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="sc-prog-content3">
                  <div class="lt-prog-des">Check Distance Learning Programme (DLP)</div>
                  <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/channel/UCvO3yPdPJu4OvlEP30uhyzA">Watch More...</a></div>
                </div>
              </div>
              
              <div class="col-3">
               <div class="sc-prog-content4">
                <div class="lt-prog-des">Check Monitors LCM & HCF Problems</div>
                <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j3BkM0YE8PPtbYpeexidlCp">Watch More...</a></div>
              </div>
              </div>
            
            </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="sc-prog-content5">
                  <div class="lt-prog-des">Check Out Monitors Square Root Problems</div>
                  <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j2QS0u3I6qhx1h3x7KzPs4N">Watch More...</a></div>
                </div>
              </div>
              
              <div class="col-3">
              <div class="sc-prog-content6">
                <div class="lt-prog-des">Check Out Monitors Average Problems.</div>
                <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j20TbEQZB5MylZEF1rECl6j">Watch More...</a></div>
              </div>
              </div>
            
            </div>
        </div>

      </div>

    </div>
</div>

<div class="img-slider">

  <figure>

  <p class="slider-head-txt">Reasoning Practical Notes</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Get notes of every course</p>

  <hr>
  
  <p class="slider-head-txt">English Practical Book</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Get practical books of every course</p>

  <hr>

  <p class="slider-head-txt">Monitor's The Philosophy of Success</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Contact us to start franchisee of online classes</p>

  <hr>

  <p class="slider-head-txt">Mathematics</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Mathematics for several competitive exams</p>

  <hr>

  <p class="slider-head-txt">Monitor's Institute Of Management & Science</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Online classes, a.c. rooms, daily notes and weekly test series, hostel facility</p>

  <hr>

  <p class="slider-head-txt">Monitor's Institute Of Management & Science</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Highly skilled staff, classroom embedded with all facilities</p>

  <hr>

  <p class="slider-head-txt">General Knowledge</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">A power packed general studies & current affairs package</p>

  <hr>

  <p class="slider-head-txt">Monitor's The Philosophy of Success</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Contact us to start franchisee of online classes</p>

  <hr>

  <p class="slider-head-txt">Monitor's The Philosophy of Success</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Contact us to start franchisee of online classes</p>

  <hr>

  <p class="slider-head-txt">Monitor's The Philosophy of Success</p>
  <img class="img-slider-img" src="./Images/img4.jpg"/>
  <p class="slider-txt">Contact us to start franchisee of online classes</p>


</figure>

</div>

<div class="gallery-container">

    <img src="./Images/adimg.jpeg" class="gal-img">

    <div class="gal-heading">
      From Our Gallery
    </div>

    <div class="gal-subhead">
      Monitors Media Team Constantly Shooting Videos and Images of Its Studio, Institute. To See More Pics and Videos Click Monitors Media.
    </div>


    <button class="media-button" onclick="location.href='download_gallery.php'" type="button">
         Monitors Media</button>
</div>

  <div class="bottom-head-cont">

  <h3 class="bottom-head" style="">Best Coaching Institute in Jaipur - Monitor's Education Group</h3>

  <img src="./Images/img4.jpg" class="ssc-img">

  <p class="bottom-lead">Monitor's Education Group is the best coaching institute located at 54, Arjun Nagar North, Near Gopalpura By Pass, Jaipur- 302 015. Monitor's Education Group provides it's service in sevaral competition exams preparation courses <a href=""> SSC, MBA, SLET, NET, C.P.O., CDS, CAT, B.ED, RAILWAY, NDA, RAS, MCA, IAS, RPSC, BANK P.O. & CLERKS.</a></p>

  <p class="bottom-lead">With Monitor's Group, Government Exam aspirants now can ease their learning ability by join Monitors Coaching. Monitors Coaching provide high quality and relative notes of sevaral courses. With monitor's notes, aspirant find themselves in better positon and ahead of everyone else.</p>

  <p class="bottom-lead">And now our nation and we are facing a different situation in COVID-19 desease and everyone have to sit back in their house to make sure they don't affected by this deadly virus. Monitor's Education Group come up with a brilliant idea to provide government exam aspirant a different way to study from home for their upcoming exams. Monitor's Education brings online classes and live doubt session to exam aspirants to provide them proper teaching and guidence for their upcoming exams.</p>


  <h3 class="bottom-head">Monitor's Education is the best because</h3>
  <p class="best-txt">&rarr; Provide daily regular classes  </p>
  <p class="best-txt">&rarr; Daily live classes on digital platform </p>
  <p class="best-txt">&rarr; Live doubt sessions</p>
  <p class="best-txt">&rarr; Hostel facility  </p>
  <p class="best-txt">&rarr; Classrooms embedded with all facilities </p>

</div>


<div class="enquiry-form">
  <div class="enq-head">Quick Enquiry Form</div>

<form method="POST" action="#"> 

  <div class="form-cont">
    <label for="name" class="name"><b>Name</b></label>
    <input type="text" placeholder="" name="name" required>

    <label for="email" class="name"><b>Email</b></label>
    <input type="text" placeholder="" name="email" required>
        
    <label for="mobile" class="name"><b>Mobile</b></label>
    <input type="text" placeholder="" name="mobile" required>

    <label for="city" class="name"><b>City</b></label>
    <input type="text" placeholder="" name="city" required>

      <input type="submit" class="submit-btn" name="Submit" value="Submit">
  </div>

  </form>

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