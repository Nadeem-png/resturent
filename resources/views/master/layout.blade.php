<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9ddc0bba90.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        * {
            font-family:Arial;
        }
        .nav-bar {
            height: 70px;
            background: red;
        }

        .brand {
            position: absolute;
            padding-left: 20px;
            float: left;
            line-height: 70px;
            text-transform: uppercase;
            font-size: 20px;

        }
        .brand a img {
            max-height: 70px;
        }
        .brand a,
        .brand a:visited {
            color: #ffffff;
            text-decoration: none;
        }

        .nav-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        nav {
            float: right;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            float: left;
            position: relative;
        }
        nav ul li a,
        nav ul li a:visited {
            display: block;
            padding: 0 20px;
            line-height: 70px;
            background: red;
            color: #ffffff;
            text-decoration: none;
        }
        nav ul li a:hover,
        nav ul li a:visited:hover {
            background: #2ab1ce;
            color: #ffffff;
        }
        nav ul li a:not(:only-child):after,
        nav ul li a:visited:not(:only-child):after {
            padding-left: 4px;
            content: ' ▾';
        }
        nav ul li ul li {
            min-width: 190px;
        }
        nav ul li ul li a {
            padding: 15px;
            line-height: 20px;
        }

        .nav-dropdown {
            position: absolute;
            display: none;
            z-index: 1;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
        }
        .nav-mobile {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            background: #262626;
            height: 70px;
            width: 70px;
        }

        @media only screen and (max-width: 798px) {
            .nav-mobile {
                display: block;
            }

            nav {
                width: 100%;
                padding: 70px 0 15px;
            }
            nav ul {
                display: none;
            }
            nav ul li {
                float: none;
            }
            nav ul li a {
                padding: 15px;
                line-height: 20px;
                padding-left: 25%;

            }
            nav ul li ul li a {
                padding-left: 30%;
            }

            .nav-dropdown {
                position: static;
            }
            .brand a img {
                max-height: 60px;
                margin-top: 5px;
            }
        }
        @media screen and (min-width: 799px) {
            .nav-list {
                display: block !important;
            }
        }
        #nav-toggle {
            position: absolute;
            left: 18px;
            top: 22px;
            cursor: pointer;
            padding: 10px 35px 16px 0px;
        }
        #nav-toggle span,
        #nav-toggle span:before,
        #nav-toggle span:after {
            cursor: pointer;
            border-radius: 1px;
            height: 5px;
            width: 35px;
            background: #ffffff;
            position: absolute;
            display: block;
            content: '';
            transition: all 300ms ease-in-out;
        }
        #nav-toggle span:before {
            top: -10px;
        }
        #nav-toggle span:after {
            bottom: -10px;
        }
        #nav-toggle.active span {
            background-color: transparent;
        }
        #nav-toggle.active span:before, #nav-toggle.active span:after {
            top: 0;
        }
        #nav-toggle.active span:before {
            transform: rotate(45deg);
        }
        #nav-toggle.active span:after {
            transform: rotate(-45deg);
        }
        #footer{
            background-color:rgb(49, 51, 51);
            width:100%;
        }


    </style>
</head>

<body>

<section class="nav-bar">
    <div class="nav-container">
        <div class="brand">
            <a href="home.html"><img src={{asset('img/logoo.png')}}></a>
        </div>
        <nav>
            <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">
                <li>
                    <a href="../home.html">Home</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Cites</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="#">Lahore</a>
                        </li>
                        <li>
                            <a href="#">Karachi</a>
                        </li>
                        <li>
                            <a href="#">Islamabad</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#!">Contact Us</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
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
<script>
    $(document).ready(function () {
     setTimeout(function () {
      $(".alert").alert("close");
     },4000);
    });
</script>
<script>
    (function($) {
        $(function() {
            $('nav ul li a:not(:only-child)').click(function(e) {
                $(this).siblings('.nav-dropdown').toggle();
                $('.dropdown').not($(this).siblings()).hide();
                e.stopPropagation();
            });
            $('html').click(function() {
                $('.nav-dropdown').hide();
            });
            $('#nav-toggle').click(function() {
                $('nav ul').slideToggle();
            });
            $('#nav-toggle').on('click', function() {
                this.classList.toggle('active');
            });
        });
    })(jQuery);

</script>
</body>

</html>
