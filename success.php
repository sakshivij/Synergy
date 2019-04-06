<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="5;url=registerEvent.php" />

  <title>IgniteSynergy</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  <link href="styles.css" rel="stylesheet"> <!-- Main CSS -->
  <link href="blog_style.css" rel="stylesheet"> <!-- Blog CSS -->
  <link href="style.css" rel="stylesheet"> <!-- Loader CSS -->
  <link href="animate.min.css" rel="stylesheet"> <!-- Animations CSS -->
</head>
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Oswald);
html,
body {
  width: 100%;
  height: 100%;
  padding: 0px;
  margin: 0px;
  overflow-y: scroll;
  position: absolute;
}
  #dates{
    margin-top:200px; position: relative;
  }

@media screen and (max-width: 600px) {
  #dates{
    margin-top:250px; position: relative;
  }
  #contact{
    margin-top: 30px;
  }
  #text{
  position: relative;
  left: 50%;
  top: 190px;
  width: 100%;
    
  }

div#redirect{
position: absolute; 
}
}
body {
  background-color: #efefef;
  background: radial-gradient(rgb(255, 255, 255), rgb(200, 200, 200));
}

svg {
  opacity: 0;
  overflow: visible;
  position: absolute;
  left: 50%;
  top: 53%;
  transform: translate(-50%, -50%);
}

#text {
  position: relative;
  left: 50%;
  top: 90px;
  width: 100%;
  transform: translate(-50%, 0%);
  font-family: 'Oswald', arial;
  color: #ED002E;
  font-size: 50px;
  font-size: 5.5vw;
  text-align: center;
  white-space: nowrap;
}

#text span {
  color: #444;
  font-size: 30px;
  font-size: 3.5vw;
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
.title {
    color: red;
}
.about__info {
    height: 17%;
}
.bioText {
    margin-top: 3em;
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
.input-prepend input {
  width: 20em;
}
.fa-mobile {
  font-size: 3.5em;
  padding: 0.1rem;
}
footer {
  background-color: BLACK;
  color: #d5d5d5;
  padding-top: 2rem;
  overflow: hidden;
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
.navbar-fixed-bottom {
  position: fixed !important;
  left: 0 !important;
  bottom: 0 !important;
  width: 100% !important;
  text-align: center !important;
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
    font-size: 4em;
    padding: 2rem;
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
    padding: 0.7rem;
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
            .social a {
                font-size: 2.5em;
                padding: 0.6rem;
            }
        #ticketModal .modal-dialog {
        max-width: 20em;
        margin: 5em auto;
            }
            .about__section {
                text-align: center;
                width: 100%;
            }
            .about__info {
                text-align: center;
                height: 18%;
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
            .about__section {
                text-align: center;
                width: 100%;
            }
            .about__info {
                text-align: center;
                height: 18%;
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
        font-size: 2.5em;
        padding: 0.4rem;
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
    #ticketModal .modal-dialog {
        max-width: 300px;
        margin: 5em auto;
    }
    .social a {
        font-size: 2.5em;
        padding: 0.4rem;
    }
}
@media screen and (min-width: 900px) and (max-width: 1200px)  {
        .navbar {
          padding: 0;
        }
        .navbar-brand {
            height: 60%;
            width: 70%;
        }
.navbar-nav li {
  padding-right: 0.3px;
}
.nav-link {
  font-size: 1.4em !important;
}
        .padding {
          padding-top: 0.5em;
        }
        .last {
          font-size: 180%;
        }
    .display-4 {
    font-size: 300%;
  }
        .logo {
            height: 10%;
            width: 50%;
        }
        .lead {
            font-size: 130%;
        }
        .about_slot .name {
            font-size: 1.5em;
        }
        .about_slot .title {
            font-size: 1em;
        }
        .social a {
            font-size: 2.8em;
            padding: 0.6rem;
        } 
      }
      @media screen and (min-width: 1200px) {
        .about__info .name {
            font-size: 1.5em;
        }
        .about__info .title {
            font-size: 1em;
        }
        .bioText {
                font-size: 0.9em;
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

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: black;">
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
          <li class="nav-item active">
            <a class="nav-link tab" href="sponsors.html">Sponsors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tab" href="contact.html">Contact</a>
          </li>
           <li class="nav-item">
            <a class="nav-link tab" href="https://drive.google.com/open?id=0B8MYPd3uqUTbUjkzQU1zZk1NcmNNalV3R1Q2LVBxcy1aYXdB">Brochure</a>
          </li>
              <li>
              <button class="btn btn-secondary" class="register" style="text-decoration: none;background-color: transparent;"><a href="registerEvent.php" >Get Registered</a></button>
        
          </li>
      
        </ul>
      </div>
    </div>
  </nav>

<div class="padding"></div>
<div class="padding"></div>
<div class="padding"></div>
<div class="padding"></div>
<div class="padding"></div>
<div class="padding"></div>


<div id="sponsors" style="margin-top: 10px;">
    <div class="col-12">
        <br>
        <h1 class="line-1" style="margin-top: 50px;">Thank you for registering.</h1><br/>
        <p style="color: black !important; position: relative;width: 20em;margin:0 auto;text-align: center;transform: translateY(-50%);">A confirmation mail will be sent to you shortly for further details <br>
        Your Unique Id Is : <?php echo $_REQUEST["user_no"]; ?></p>
        
      
  </div>
    </div>
  

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

  <script>
    window.sr = ScrollReveal();
    sr.reveal('.navbar',{duration:1000});
    sr.reveal('.row',{duration:1000});
    sr.reveal('.container-fluid',{duration:1000});
    sr.reveal('#about',{duration:1000});
    sr.reveal('#blogs',{duration:1000});
  </script>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!--- Footer -->
    <footer class="navbar-fixed-bottom">
        <div class="container-fluid padding" id="contact">
           
        <div class="col-12 text-center">
            <hr class="light-100">
            <h6 class="last animated slow delay-2s slideInUp">&copy; Copyright 2019, All Rights Reserved with IGDTUW</h6>
        </div>
    </footer>


</body>
</html>