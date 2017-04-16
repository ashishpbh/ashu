<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(isset($_SESSION)){
		if($_SESSION['user']==true)
	header("Location: welcome.php");
}?>
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>ONLINE LEAVE MANAGEMENT SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
<!--<script>
function validateForm() {
    var n = document.forms["myForm"]["name"].value;
    if (n == "nu ") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
  -->
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">SRMS Bareilly</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">Profile</a></li>
        <li><a href="#tour">Leave</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Colleges</a></li>
            <li><a href="#">Hostels</a></li>
            <li><a href="#">Staff</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive" src="1.jpg" alt="New York" width="1080" height="500">
        <div class="carousel-caption">
          <h2>SRMS</h2>
          <p style="color:blue;">Excellence is our motto</p>
        </div>      
      </div>

      <div class="item">
        <img class="img-responsive" src="2.jpg" alt="Chicago" width="1080" height="500">
        <div class="carousel-caption">
          <h2>SRMS</h2>
          <p id="t1">Excellence is our motto</p>
        </div>      
      </div>
    
      <div class="item">
        <img class="img-responsive" src="3.jpg" alt="Los Angeles" width="1080" height="500">
        <div class="carousel-caption">
          <h2>SRMS</h2>
          <p id="t1">Excellence is our motto</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h1>Online Leave Management System</h1>
  <p>Track your leave record and also apply for leave </p> <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>ADMIN</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="u.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
	  <a href="#demoadmin125" class="btn btn-info" data-toggle="collapse">Sign in</a>
		<div id="demoadmin125" class="collapse">
  <!--sign in form  for admin-->
  <form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><!--form end-->
      </div>  </div>
    </div>
	<!--first image end  here admin-->
	
	<!--second img-->
    <div class="col-sm-4">
      <p class="text-center"><strong>Hosteler</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="u.png" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
	  <a href="#hosteler125" class="btn btn-info" data-toggle="collapse">Sign in</a>
	  <button class="btn" data-toggle="modal" data-target="#myModalhost">sign up</button>
       
		<div id="hosteler125" class="collapse">
  <!--sign in form  for hostellor-->
  <!--sign in form  for hostellor-->
  <form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><!--form end-->
      </div> </div>
    </div><!--image for section 2 hosteloer section end here -->
    
	
	<!--staff section--><div class="col-sm-4">
      <p class="text-center"><strong>STAFF</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="ashu.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <a href="#demostaff12" class="btn btn-info btn-md" data-toggle="collapse">Sign in</a>
		<button class="btn" data-toggle="modal" data-target="#myModalstaff">sign up</button>
        
  <div id="demostaff12" class="collapse">
  <!--sign in form  for staff-->
  <form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form><!--form end-->
      </div>
      </div>
    </div><!--staff section end here-->
  </div>
</div>

<!-- Container (feedback Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">your feedback</h3>
    <p class="text-center">give your feedback about our service.<br> Remember your feedback is our !</p>
    <ul class="list-group">
      <li class="list-group-item"><label for="comment">lbv feedback:</label>
  <textarea class="form-control" rows="3" id="comment"></textarea>
  <button type="submit" class="btn btn-danger" style="color:blue;margin-left:30px;margin-top:10px;">Submit</button>
        <!--<span class="badge">boys hostel!</span>-->
  
  </li>
	       <li class="list-group-item"><label for="comment">lbv feedback:</label>
  <textarea class="form-control" rows="3" id="comment"></textarea>
  <button type="submit" class="btn btn-danger" style="color:blue;margin-left:30px;margin-top:10px;">Submit</button>
  
		   
		   </li> 
      <li class="list-group-item"><label for="comment">lbv feedback:</label>
  <textarea class="form-control" rows="3" id="comment"></textarea>
  <button type="submit" class="btn btn-danger" style="color:blue;margin-left:30px;margin-top:10px;">Submit</button>
  
	  </li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="lbv.jpg" alt="lbv" width="400" height="300">
          <p><strong>lbv</strong></p>
          <p>lbv hostel</p>
          <!--<button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        -->
		</div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="revati.jpg" alt="revati" width="400" height="300">
          <p><strong>revati</strong></p>
          <p>revati hostel</p>
          <!--<button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>-->
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="revati.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>Er.subhash mehra</strong></p>
          <p>sm hostel</p>
          <!--<button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        --></div>
      </div>
    </div>
  </div>
  </div>
  <!-- Modal form for sign up for hostelor  -->
  <div class="modal fade" id="myModalhost" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content for hostoler-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Sign up</h4>
        </div>
		
		

        <div class="modal-body">
          <form name="myForm" action="signuphost.php" onsubmit="return validateForm()"  method="POST" >
		  <!-- role="form"Modal signup send for hostoler-->
		  
		  <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-pencil"></span>name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="type your name">
            </div>
			
			<div class="form-group">
              <label for=" father name"><span class="glyphicon glyphicon-user"></span>father name</label>
              <input type="text" class="form-control" name="fname" id="fname" placeholder="type your father  name">
            </div>
			<!--<div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-user"></span>address</label>
              <input type="text" class="form-control" id="address" placeholder="type your address">
            </div>-->
			
			
		  
		  
		
            <div class="form-group">
              <label for="roll no"><span class="glyphicon glyphicon-user"></span>Rollno.</label>
              <input type="number" class="form-control" name="rollno" id="rollno" placeholder="your university rollno">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span>Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div>
			
			
			<div class="form-group">
              <label for="password"><span class=" glyphicon glyphicon-eye-open"></span>Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="choose your password">
            </div>
			
			<div class="form-group">
              <label for="phoneno"><span class=" glyphicon glyphicon-phone"></span>Contact no.</label>
              <input type="number" class="form-control" name="contactno" id="contactno" placeholder="enter your contact no.">
            </div>
			<div class="form-group">
              <label for="hostel name"><span class=" glyphicon glyphicon-home"></span>hostel name.</label>
              <input type="text" class="form-control" name="hostelname" id="hostelname" placeholder="enter your hostel name.">
            </div>
			
			
			<div class="form-group">
      <label for="pwd">
	 <span class=" glyphicon glyphicon-picture"></span>upload your image:</label>
      <input type="file" class="form-control" name="img" id="file">
    </div>
  
			
              <input type="submit" class="btn btn-block" name="submit" value="submit" >
			  
                <!--<span class="glyphicon glyphicon-ok"></span>
              </button>-->
          </form><script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
	var f = document.forms["myForm"]["fname"].value;
   var p = document.forms["myForm"]["password"].value;
   var r = document.forms["myForm"]["rollno"].value;
   var c = document.forms["myForm"]["contactno"].value;
   var h = document.forms["myForm"]["hostelname"].value;
   
   var e = document.forms["myForm"]["email"].value;
   
   
    if (x == "" || p =="" ||f== "" || r =="" || c =="" || h =="" || e=="") {
        alert("Name password rollno contactno hostelname father must be filled out");
	return false;}
	/*if (f == "") {
        alert("father name  must be filled out");
	return false;}
  /
  if (c == 0) {
        alert("phone must be filled out");
        return false;
    }*/
}
</script>
		  
		  
		  
		  
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
<!--</div>-->
<!--staff-->

<!--staff sinup-->
<div class="modal fade" id="myModalstaff" role="dialog">
    <div class="modal-dialog  modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Sign up</h4>
        </div>
        <div class="modal-body">
          <form name="myForm2" action="signupstaff.php" method="POST"  onsubmit="return validatemyForm()">
		  
		  <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-pencil"></span>name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="type your name">
            </div>
			
		<!--	<div class="form-group">
              <label for=" father name"><span class="glyphicon glyphicon-user"></span>father name</label>
              <input type="text" class="form-control" id="fname" placeholder="type your father  name">
            </div>
			<div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-user"></span>address</label>
              <input type="text" class="form-control" id="address" placeholder="type your address">
            </div>
	
            <div class="form-group">
              <label for="roll no"><span class="glyphicon glyphicon-user"></span>Rollno.</label>
              <input type="number" class="form-control" id="rollno" placeholder="your university rollno">
            </div>-->
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span>Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div>
			
			
			<div class="form-group">
              <label for="password"><span class=" glyphicon glyphicon-eye-open"></span>Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="choose your password">
            </div>
			
			<div class="form-group">
              <label for="phoneno"><span class=" glyphicon glyphicon-phone"></span>Contact no.</label>
              <input type="number" class="form-control"  name="contactno" id="contactno" placeholder="enter your contact no.">
            </div>
			<!--<div class="form-group">
              <label for="hostel name"><span class=" glyphicon glyphicon-home"></span>hostel name.</label>
              <input type="text" class="form-control" id="hostelname" placeholder="enter your hostel name.">
            </div>-->
			
			
			<div class="form-group">
      <label for="pwd">
	 <span class=" glyphicon glyphicon-picture"></span>upload your image:</label>
      <input type="file" class="form-control" name="img" id="file">
    </div>
  
			
              <input type="submit" class="btn btn-block" name="submit" value="submit"> 
                
          </form><script>
		  function validatemyForm() {
    var x = document.forms["myForm2"]["name"].value;
	//var f = document.forms["myForm2"]["fname"].value;
   var p = document.forms["myForm2"]["password"].value;
   //var r = document.forms["myForm2"]["rollno"].value;
   var c = document.forms["myForm2"]["contactno"].value;
   //var h = document.forms["myForm2"]["hostelname"].value;
   
   var e = document.forms["myForm2"]["email"].value;
   
   
    if (x == "" || p =="" || c =="" || e=="") {
        alert(" please fill all details");
	return false;}
	
		  }  </script>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>






<!-staff  signup  end here->
<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em> Drop your valuable suggestion</em></p>

  <div class="row">
    <div class="col-md-4">
      
      <p><span class="glyphicon glyphicon-map-marker"></span> SRMS, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 XXXXXXXXXX</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: developersleave@project.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Developers</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Ashish</a></li>
    <li><a data-toggle="tab" href="#menu1">Nitish</a></li>
    <li><a data-toggle="tab" href="#menu2">Shubham</a></li>
	<li><a data-toggle="tab" href="#menu3">Deepak</a></li>
 
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Ashish Pandey</h2>
     <div class="col-md-4"> <a href="#demo" data-toggle="collapse">
        <img src="u.png" class="img-circle person" alt="Random Name" width="55" height="55">
      </a>
       </div>
	   <div class="col-md-8"> <h1> srms cs2 3rd year student</h1><br>
       <h2> srms cs2 3rd year student</h2><br>
       
	   </div>
	   
	   </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Nitish,developer</h2>
     <div class="col-md-4"> <a href="#demo" data-toggle="collapse">
        <img src="u.png" class="img-circle person" alt="Random Name" width="55" height="55">
      </a>
       </div>
	   <div class="col-md-8"> <h1>cs -2 3rd year student</h1>
       </div>
	   
	   
	   </div>
    <div id="menu2" class="tab-pane fade">
      <h2>shubham,developer</h2>
     <div class="col-md-4"> <a href="#demo" data-toggle="collapse">
        <img src="u.png" class="img-circle person" alt="Random Name" width="55" height="55">
      </a>
       </div></div>
	   <div id="menu3" class="tab-pane fade">
      <h2>Deepak,developer</h2>
     <div class="col-md-4"> <a href="#demo" data-toggle="collapse">
        <img src="u.png" class="img-circle person" alt="Random Name" width="55" height="55">
      </a>
       </div></div>
    
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(28.38364, 79.43099);
var mapProp = {center:myCenter, zoom:30, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3xwCVXqi2Tkc2vl8vc-awk0mnGSgsz8Q
&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>srms online leave management system <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit srmsdevelopers.in">developers@leave.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
