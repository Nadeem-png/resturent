
<!doctype html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
   <style>
body {
    position: relative;
    overflow-x: hidden;
}

body, html {
    height: 100%;
}

.nav .open > a {
    background-color: transparent;
}

    .nav .open > a:hover {
        background-color: transparent;
    }

    .nav .open > a:focus {
        background-color: transparent;
    }

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

    #wrapper.toggled {
        padding-left: 220px;
    }

        #wrapper.toggled #sidebar-wrapper {
            width: 220px;
        }

        #wrapper.toggled #page-content-wrapper {
            margin-right: -220px;
            position: absolute;
        }

#sidebar-wrapper {
    background: #1a1a1a;
    height: 100%;
    left: 220px;
    margin-left: -220px;
    overflow-x: hidden;
    overflow-y: auto;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -webkit-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    width: 0;
    z-index: 1000;
}

    #sidebar-wrapper::-webkit-scrollbar {
        display: none;
    }


#page-content-wrapper {
    padding-top: 70px;
    width: 100%;
}


.sidebar-nav {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 0;
    width: 220px;
}

    .sidebar-nav li {
        display: inline-block;
        line-height: 20px;
        position: relative;
        width: 100%;
    }

        .sidebar-nav li:before {
            background-color: #1c1c1c;
            content: '';
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 3px;
            z-index: -1;
        }

        .sidebar-nav li:before {
            background-color: #6bb4e7;
        }

        .sidebar-nav li:hover:before {
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 100%;
        }

        .sidebar-nav li a {
            color: #dddddd;
            display: block;
            padding: 10px 15px 10px 30px;
            text-decoration: none;
        }

        .sidebar-nav li.open:hover before {
            -webkit-transition: width 0.2s ease-in;
            -moz-transition: width 0.2s ease-in;
            -ms-transition: width 0.2s ease-in;
            -o-transition: width 0.2s ease-in;
            transition: width 0.2s ease-in;
            width: 100%;
        }

    .sidebar-nav .dropdown-menu {
        background-color: #222222;
        -ms-border-radius: 0;
        border-radius: 0;
        border: none;
        -webkit-box-shadow: none;
        -ms-box-shadow: none;
        box-shadow: none;
        margin: 0;
        padding: 0;
        position: relative;
        width: 100%;
    }

    .sidebar-nav li a:hover, .sidebar-nav li a:active, .sidebar-nav li a:focus, .sidebar-nav li.open a:hover, .sidebar-nav li.open a:active, .sidebar-nav li.open a:focus {
        background-color: transparent;
        color: #ffffff;
        text-decoration: none;
    }

    .sidebar-nav > .sidebar-brand {
        font-size: 20px;
        height: 65px;
        line-height: 44px;
    }

.hamburger {
    background: transparent;
    border: none;
    display: block;
    height: 32px;
    margin-left: 15px;
    position: fixed;
    top: 20px;
    width: 32px;
    z-index: 999;
}

    .hamburger:hover {
        outline: none;
    }

    .hamburger:focus {
        outline: none;
    }

    .hamburger:active {
        outline: none;
    }

    .hamburger.is-closed:before {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        content: '';
        display: block;
        font-size: 14px;
        line-height: 32px;
        -ms-opacity: 0;
        opacity: 0;
        text-align: center;
        width: 100px;
    }

    .hamburger.is-closed:hover before {
        -webkit-transform: translate3d(-100px, 0, 0);
        -moz-transform: translate3d(-100px, 0, 0);
        -ms-transform: translate3d(-100px, 0, 0);
        -o-transform: translate3d(-100px, 0, 0);
        transform: translate3d(-100px, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        display: block;
        -ms-opacity: 1;
        opacity: 1;
    }

    .hamburger.is-closed:hover .hamb-top {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        top: 0;
    }

    .hamburger.is-closed:hover .hamb-bottom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        bottom: 0;
    }

    .hamburger.is-closed .hamb-top {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        top: 5px;
    }

    .hamburger.is-closed .hamb-middle {
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-closed .hamb-bottom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        bottom: 5px;
    }

    .hamburger.is-closed .hamb-top, .hamburger.is-closed .hamb-middle, .hamburger.is-closed .hamb-bottom, .hamburger.is-open .hamb-top, .hamburger.is-open .hamb-middle, .hamburger.is-open .hamb-bottom {
        height: 4px;
        left: 0;
        position: absolute;
        width: 100%;
    }

    .hamburger.is-open .hamb-top {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -moz-transition: -moz-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -ms-transition: -ms-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -o-transition: -o-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        transition: transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-open .hamb-middle {
        display: none;
    }

    .hamburger.is-open .hamb-bottom {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -moz-transition: -moz-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -ms-transition: -ms-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        -o-transition: -o-transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        transition: transform 0.2s cubic-bezier(0.73, 1, 0.28, 0.08);
        margin-top: -2px;
        top: 50%;
    }

    .hamburger.is-open:before {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        content: '';
        display: block;
        font-size: 14px;
        line-height: 32px;
        -ms-opacity: 0;
        opacity: 0;
        text-align: center;
        width: 100px;
    }

    .hamburger.is-open:hover before {
        -webkit-transform: translate3d(-100px, 0, 0);
        -moz-transform: translate3d(-100px, 0, 0);
        -ms-transform: translate3d(-100px, 0, 0);
        -o-transform: translate3d(-100px, 0, 0);
        transform: translate3d(-100px, 0, 0);
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        -ms-transition: all 0.35s ease-in-out;
        -o-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        display: block;
        -ms-opacity: 1;
        opacity: 1;
    }


.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #000000;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.hamb-bottom, .hamb-middle, .hamb-top {
    background-color: black;
}
</style>

</head>

<body>


  <div id="wrapper" class="">
         <div class="overlay" style="display: none;"></div>
         <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
               <li class="sidebar-brand">
                  <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"> BLESM </a>
               </li>
               <li>
                  <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-camera"></i> Photo</a>
               </li>
               <li>
                  <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-facetime-video"></i> Video</a>
               </li>
               <li>
                  <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-headphones"></i> Music</a>
               </li>
               <li>
                  <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-cloud"></i> Cloud</a>
               </li>
               <li>
                  <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-th"></i> Apps</a>
               </li>
               <li>
                  <a href="https://github.com/FragCoder/bootstrap-left-slide-menu"><i class="glyphicon glyphicon-cog"></i> Settings</a>
               </li>
            </ul>
         </nav>
         <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
            </button>
            <div class="container">
               @yield('content')
            </div>
         </div>
      </div>




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
<script>
$(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;

    function buttonSwitch() {

        if (isClosed === true) {
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

    trigger.click(function () {
        buttonSwitch();
    });

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });
});
</script>
</body>


</html>
