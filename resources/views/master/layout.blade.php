<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
<link rel="stylesheet" href="css/style.css">
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
    <script>

$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;
 
    trigger.click(function () {
      hamburger_cross();      
    });
 
    function hamburger_cross() {
 
      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
 
        </script>
</head>

<body>
<div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="#">Brand</a></div></div>
       <li><a href="#home">Home</a></li>
       <li><a href="#about">About</a></li>
       <li><a href="#events">Events</a></li>
       <li><a href="#team">Team</a></li>
       <li class="dropdown">
       <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Works <span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      <div class="dropdown-header">Dropdown heading</div>
      <li><a href="#pictures">Pictures</a></li>
      <li><a href="#videos">Videeos</a></li>
      <li><a href="#books">Books</a></li>
      <li><a href="#art">Art</a></li>
      <li><a href="#awards">Awards</a></li>
      </ul>
      </li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#followme">Follow me</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->
 
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2"">
       
                       <p> Your content goes here... </p>
 
                   </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
 
    </div>

@yield('content')


<footer id="footer">
    <div class="container px-5 py-5 text-truncate">
        <div class="row ">
            <div class="col my-5">
                <h5 class="text-white">Contact</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <p class="text-white mt-4 mb-5">31 Tipu Block new Garden town<br>Lahore kalma chowk.<br>17 km Main Raiwind Road,<br>Lahore.<br>Superior Gold Campus,<br>6 KM Raiwind Rd, Lahore</p>
                <p class="text-white">UAN: 042-111-00-00-78</p>
                <a href="#"  class="text-white mb-3" style="text-decoration: none;">info@leads.edu.pk</a><br>
                <a href="#"  class="text-white" style="text-decoration: none;">admissions@leads.edu.pk</a>
            </div>


            <div class="col my-5">
                <h5 class="text-white">Our Campus</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <ul class="mt-4">
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 mt-4" style="text-decoration: none;">All About Leads</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 " style="text-decoration: none;">Leads Documentary</a>
                    </li>
                    <li class="mb-3">
                        <a href="/gallery"  class="text-white mb-3" style="text-decoration: none;">Picture Gallery</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Feedback</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Co-curricular Activities</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">International Office</a>
                    </li>
                    <li>
                        <a href="#"  class="text-white" style="text-decoration: none;">Department of Public Relations</a>
                    </li>

                </ul>
            </div>


            <div class="col my-5">
                <h5 class="text-white">Academics</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <ul class="mt-4">
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 mt-4" style="text-decoration: none;">Admissions Procedure</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 " style="text-decoration: none;">Scholarships and Fees</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Policies</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Rules Governing Financial Awards<br>and Scholarships</a>
                    </li>

                </ul>
            </div>
            <div class="col my-5">
                <h5 class="text-white">Media</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <ul class="mt-4">
                    <li class="mb-3">
                        <a href="/blog"  class="text-white mb-3 mt-4" style="text-decoration: none;">Blog</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 " style="text-decoration: none;">Videos</a>
                    </li>
                    <li class="mb-3">
                        <a href="/team"  class="text-white mb-3" style="text-decoration: none;">Our Team</a>
                    </li>
                    <li class="mb-3">
                        <a href="/news"  class="text-white mb-3" style="text-decoration: none;">News and Updates</a>
                    </li>
                    <li class="mb-3">
                        <a href="/event"  class="text-white mb-3" style="text-decoration: none;">Events and PR</a>
                    </li>

                </ul>
            </div>

            <hr class="text-danger" style="width:100%;border-top:3px solid">
            <p class=" text-white "> Theme &copy; 2021.All Right Reserved.</p>
        </div>
    </div>
</footer>

</body>

</html>
