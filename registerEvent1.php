
<!DOCTYPE html>
<?php session_start();
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IgniteSynergy</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="apple-touch-icon" sizes="57x57" href="logos/IMG_2792.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="animate.min.css" rel="stylesheet"> <!-- Animations CSS -->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,700');
		html, body {
			font-family: 'Poppins', sans-serif;
			 background-size: contain;
			background-color:white !important;

		}
		.navbar {
			padding: 0.8rem;
		}
		.navbar-nav li {
  			padding-right: 20px;
		}
		.nav-link {
  			font-size: 1.1em !important;	
		}
		#ticketModal .modal-dialog {
  			max-width: 30em;
  			margin: 4em auto;
		}
		#ticketModal .modal-body {
  			position: relative;
  			padding: 1.3em;
		}
		#ticketModal .close {
  			position:absolute;
  			right:-30px;
  			top:0;
  			z-index:999;
  			font-size:2rem;
  			font-weight: normal;
  			color:#fff;
  			opacity:1;
		}
		.lead {
  			color: gray;
  			text-align: justify;
		}
		.padding {
  			padding-bottom: 1.2rem;
		}
		.welcome {
  			width: 75;
  			margin: 0 auto;
  			padding-top: 1rem; 
		}
		.welcome hr {
  			border-top: 2px solid #b4b4b4;
  			width: 95%;
  			margin-top: 0.2rem;
  			margin-bottom: 0.5rem; 
		}
    	.social a {
  			font-size: 4.5em;
  			padding: 3rem;
		}
		.fa-facebook {
  			color: #3b5998;
		}
		.fa-linkedin {
		  	color: #0e76a8;
		}
		.fa-google-plus-g {
		  	color: #dd4b39;
		}
		.fa-instagram {
		  	color: #bc2a8d;
		}
		.fa-youtube {
			color: #bb0000;
		}
		.fa-facebook:hover, 
		.fa-linkedin:hover, 
		.fa-google-plus-g:hover,
		.fa-instagram:hover,
		.fa-youtube:hover {
		  	color: #d5d5d5;
		}
		footer {
		  	background-color: BLACK;
		  	color: #d5d5d5;
		  	padding-top: 2rem;
		} 
		hr.light {
		  	border: 1px solid #d5d5d5;
		  	width:75%;
		  	margin-top: 0.8rem;
		  	margin-bottom: 1rem;
		}
		hr.light-100 {
		  	border: 1px solid #d5d5d5;
		  	width:100%;
		  	margin-top: 0.8rem;
		  	margin-bottom: 1rem;
		}
		#return-to-top {
		  	position: fixed;
		  	bottom: 20px;
		  	right: 20px;
		  	background: #bdc3c7;
		  	opacity: 0.9;
		  	width: 3em;
		  	height: 3em;
		  	display: block;
		  	text-decoration: none;
		  	-webkit-border-radius: 35px;
		  	-moz-border-radius: 35px;
		  	border-radius: 35px;
		  	display: none;
		  	-webkit-transition: all 0.3s linear;
		  	-moz-transition: all 0.3s ease;
		  	-ms-transition: all 0.3s ease;
		  	-o-transition: all 0.3s ease;
		  	transition: all 0.3s ease;
		}
		.fa-angle-double-up {
		  	color: #e74c3c;
		  	margin: 0;
		  	position: relative;
		  	left: 0.9em;
		  	top: 0.8em;
		  	font-size: 19px;
		  	-webkit-transition: all 0.3s ease;
		  	-moz-transition: all 0.3s ease;
		  	-ms-transition: all 0.3s ease;
		  	-o-transition: all 0.3s ease;
		  	transition: all 0.3s ease;
		}
		#return-to-top:hover {
		  	background: #7f8c8d;
		}
		#return-to-top:hover i {
  			color: #fff;
  			top: 5px;
		}
		/*---Media Queries --*/
		@media (max-width: 992px) {
			.social a {
				font-size: 2em;
    			padding: 0.4rem;
  			}
		}
		@media (max-width: 768px) {
			.display-4 {
		    	font-size: 200%;
		  	}
		  	.socail a {
		    	font-size: 2.5em;
		    	padding: 1.2rem;
		  	}
		}
		@media (max-width: 576px) {
		  	.display-4 {
		    	font-size: 160%;
		  	}
		  	.socail a {
		    	font-size: 2em;
		    	padding: 0.4rem;
		  	}
		}
		@media screen and (max-width: 800px) {
		    .navbar-brand {
		      	height: 15%;
		      	width: 50%;
		    }
		    .lead {
		      	font-size: 90%;
		    }
		    .welcome {
		      	padding-top: 0;
		    }
		    .social a {
		        font-size: 2em;
		        padding: 1rem;
		    }
		}
		@media screen and (max-width: 600px) {
		    .navbar-brand {
		      	height: 15%;
		      	width: 50%;
		    }
		    .lead {
		      	font-size: 90%;
		    }
		    .welcome {
		      	padding-top: 0vh;
		    }
		    .social a {
		        font-size: 2em;
		        padding: 1rem;
		    }
		}
		@media screen and (max-width: 800px) {
			.logo {
				height: 25%;
				width: 80%;
			}
			.welcome {
				padding-top: 0;
			}
    		#ticketModal .modal-dialog {
      			max-width: 20em;
      			margin: 5em auto;
			}
		    .padding {
		    	padding-top: 0.4em;
		    }
			.social a {
				font-size: 2.5em;
				padding: 0.4rem;
			}
		}
		@media screen and (max-width: 600px) {
			.logo {
      			height: 25%;
      			width: 80%;
    		}
    		.welcome {
      			padding-top: 0vh;
    		}
    		#ticketModal .modal-dialog {
      			max-width: 20em;
      			margin: 5em auto;
			}
    		.social a {
				font-size: 2.5em;
				padding: 0.4rem;
			}
    	}
    	@media screen and (max-width: 320px) {			
		    .lead {
		      	font-size: 80%;
		    }
			.social a {
				font-size: 2.5em;
				padding: 0.2rem;
			}	
    	}
    	@media screen and (min-width: 900px) and (max-width: 1200px)  {
    		.navbar-brand {
		      	height: 50%;
		      	width: 60%;
		    }
		    .padding {
		    	padding-top: 1em;
		    }
		    .logo {
      			height: 23%;
      			width: 60%;
    		}
		    .lead {
		      	font-size: 150%;
		    }
		    .welcome {
		      	padding-top: 0;
		    }
		    .social a {
		        font-size: 2.5em;
		        padding: 0.6rem;
		    }	
    	}
    	@media screen and (min-width: 320px) and (max-width: 500px) {
    		#ticketModal .modal-dialog {
    			max-width: 15em;
      			margin: 3em auto;
			}
		}
		@media screen and (min-width: 360px) and (max-width: 600px) {
			#ticketModal .modal-dialog {
      			max-width: 18em;
      			margin: 5em auto;
			}
		}
		@media screen and (min-width: 768px) and (max-width: 1000px) {
			#ticketModal .modal-dialog {
      			max-width: 30em;
      			margin: 4em auto;
			}
		}
		@media screen and (min-width: 1024px) and (max-width: 1300px) {
			#ticketModal .modal-dialog {
      			max-width: 35em;
      			margin: 4em auto;
			}
		}


		.main{
 	margin:50px 15px;
}

@media screen and (max-width: 768px) {
		.main{
 	margin:60px 15px;
}
body{
			 background-repeat: no-repeat;
  			 background-size: contain;

}

}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 500px;
    padding: 10px 40px;
	background:black;
	    color: white;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
.red-text{
	color: red;
}
	</style>

</head>
<body style="background-color: black;">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top animated slideInDown" style="background-color: black;">
    <div class="container-fluid">
      <a href="index.html" class="navbar-brand"><img class="img-fluid logo" src="photos/ignitelogo1.png" alt="IgniteSynergy logo" width="60%" height="5%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link tab" href="home.html">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="events.html">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="team.html">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="sponsors.html">Sponsors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="contact.html">Contact</a>
          </li>
           <li class="nav-item">
            <a class="nav-link tab" href="https://drive.google.com/open?id=0B8MYPd3uqUTbUjkzQU1zZk1NcmNNalV3R1Q2LVBxcy1aYXdB">Brochure</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	<div class="padding"></div>
	<div class="padding"></div>
	<div class="padding"></div>
	<div class="padding"></div>
							<div class="container">
			<div class="row main">
				<div class="main-login main-center">

<?php
	if(isset($_SESSION['varname'])){
	$var_value = $_SESSION['varname'];
	if($var_value=="success"){
		 $message="Submission Successful! We will contact you shortly!!";
        
        echo "<script type='text/javascript'>alert('$message');</script>";
        unset($_SESSION['varname']);
       
	}
	if($var_value=="failiure"){
		 $message="Submission unsuccessful!! Please contact our team!";
        
        echo "<script type='text/javascript'>alert('$message');</script>";
        unset($_SESSION['varname']);
       
	}
	}
?>	

<script>
	/*$( document ).ready(function() {
		
		$('#enterButton').on("click", function() {
    		var event = $("#event option:selected").text();
    		console.log(event);
    		if(event == "Athletics") {
        	$("#meter100").css("display", "block");
    	}
});

		if(event=='Athletics'){
			$("#meter100").css("display", "block");		
		}
	});*/
	/*var x = document.getElementById("meter100");
	x.hide();//style.display = "none";
	function display(){
	var obj=document.getElementById("event");
	var value = obj.options[obj.selectedIndex].text;
	if(value === "Athletics"){

		var x = document.getElementById("meter100");
		//if (x.style.display === "none") {
    		console.log("none");
    		x.show();//style.display = "block";*/
  		//} else {
    	//	x.style.display = "none";
  		//}
	//}
	//console.log(value);
//}
$("#event").change(function() {
  if ($(this).val() == "Athletics") {
    $('#meter100Div').show();
    $('#meter100').attr('required', '');
    $('#meter100').attr('data-error', 'This field is required.');
  } else {
    $('#meter100Div').hide();
    $('#meter100').removeAttr('required');
    $('#meter100').removeAttr('data-error');
  }
});
$("#event").trigger("change");
</script>

					<form class="" method="post" id="live_form" action="register.php">
					<?php echo $message; ?>
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Captain Email <span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter your Email" title="Provide the correct email" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your College <span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="college" id="college" placeholder="Enter your College" title="Provide the correct college" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="captain" class="cols-sm-2 control-label">Your Captain Name<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="captain" id="captain" placeholder="Enter your Captain" title="Provide the correct captain name" required/>
								</div>
							</div>
						</div>

							<div class="form-group">
							<label for="contact" class="cols-sm-2 control-label">Your Contact Number<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="contact" id="contact" placeholder="Enter your Number" title="Provide the correct captain number" required/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="event" class="cols-sm-2 control-label">Event<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
							<div class="dropdown">
    							<select class="form-control" id="event" name="event">
    								<option value="None"></option>
    								<option value="Athletics">Athletics</option>
    								<option value="Badminton">Badminton</option>
    								<option value="TableTennis">Table Tennis</option>
    								<option value="VoleyBall">VolleyBall</option>
    								<option value="BasketBall">BasketBall</option>	
								</select>
  							</div>
							</div>
					   </div>
						
						<div class="form-group d-none" id="meter100Div">
							<label for="meter100" class="cols-sm-2 control-label">100m race<span class="red-text" >*</span></label>
							<div class="cols-sm-10" id="meter100">
								
									   <input type="radio" name="optradio100" checked>Yes<br>
									    <input type="radio" name="optradio100">No

   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="pevents100" class="cols-sm-2 control-label">Number of participants<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="pevents100" id="pevents100" placeholder="Enter Number of participants" title="Provide the number of participants" required/>
								</div>
							</div>
						</div>

						<div class="form-group d-none">
							<label for="meter200" class="cols-sm-2 control-label">200m race<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio200" checked>Yes<br>
									    <input type="radio" name="optradio200">No   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="pevents200" class="cols-sm-2 control-label">Number of participants<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="pevents200" id="pevents200" placeholder="Enter Number of participants" title="Provide the number of participants" required/>
								</div>
							</div>
						</div>

						<div class="form-group d-none">
							<label for="meter400" class="cols-sm-2 control-label">400m race<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked>Yes<br>
									    <input type="radio" name="optradio">No   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="pevents400" class="cols-sm-2 control-label">Number of participants<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="pevents400" id="pevents400" placeholder="Enter Number of participants" title="Provide the number of participants" required/>
								</div>
							</div>
						</div>


						<div class="form-group d-none">
							<label for="meter800" class="cols-sm-2 control-label">800m race<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked>Yes<br>
									    <input type="radio" name="optradio">No   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="pevents800" class="cols-sm-2 control-label">Number of participants<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="pevents800" id="pevents800" placeholder="Enter Number of participants" title="Provide the number of participants" required/>
								</div>
							</div>
						</div>

					   	<div class="form-group d-none">
							<label for="meter1500" class="cols-sm-2 control-label">1500m race<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked>Yes<br>
									    <input type="radio" name="optradio">No   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="pevents1500" class="cols-sm-2 control-label">Number of participants<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="pevents1500" id="pevents1500" placeholder="Enter Number of participants" title="Provide the number of participants" required/>
								</div>
							</div>
						</div>

						<div class="form-group d-none">
							<label for="meter4_100" class="cols-sm-2 control-label">4*100m race<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked>Yes<br>
									    <input type="radio" name="optradio">No   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="meter4_200" class="cols-sm-2 control-label">4*200m race<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked>Yes<br>
									    <input type="radio" name="optradio">No   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="long" class="cols-sm-2 control-label">Long Jump<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked>Yes<br>
									    <input type="radio" name="optradio">No   					
							</div>
						</div>


						<div class="form-group d-none">
							<label for="short" class="cols-sm-2 control-label">Short put<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								
									   <input type="radio" name="optradio" checked>Yes<br>
									    <input type="radio" name="optradio">No   					
							</div>
						</div>

						<div class="form-group d-none">
							<label for="pevents" class="cols-sm-2 control-label">Number of participants<span class="red-text" >*</span></label>
							<div class="cols-sm-10">
								<div class="input-group">
								<input type="text" class="form-control" name="pevents" id="pevents" placeholder="Enter Number of participants" title="Provide the number of participants" required/>
								</div>
							</div>
						</div>
						
						
						
						<div class="form-group ">
							<input  type="submit" class="btn btn-primary"></button>
						</div>
						
					</form>
				</div>
			</div>
		</div>


<script>
$(".dropdown-menu li a").click(function() {
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>
				
	<footer>
  			<div class="container-fluid padding" id="contact">
			<div class="row welcome text-center">
				<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4 animated slow delay-1s flipInX" style="color: gray;">Contact</h1>
				<br>
				<div class="col-12 social animated slow delay-2s zoomInDown" style="display: block">
				
						<a class="insta" href="https://www.instagram.com/synergy_igdtuw/" target="_blank"><img src="photos/instagram.png"/></a>
					<a class="fb" href="https://www.facebook.com/igdtuwsportsclub/" target="_blank"><img src="photos/facebook.png"/></a>
					
	</div>		
			</div>
			<!-- <hr> -->
		</div>
				
		</div>
	
		<div class="col-12 text-center">
			<hr class="light-100">
			<h6 class="last animated slow delay-6s slideInUp">&copy; Copyright 2019, All Rights Reserved with IGDTUW</h6>
		</div>
	</footer>

	<a href="javascript:" id="return-to-top"><i class="fa fa-angle-double-up"></i></a>

	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 50) { 
				$('#return-to-top').fadeIn(200);  
			} else {
				$('#return-to-top').fadeOut(200); 
			}
		});
		$('#return-to-top').click(function() { 
			$('body,html').animate({
				scrollTop : 0                
			}, 500);
		});
	</script>

</body>
</html>
