<?php /* Smarty version Smarty-3.1.13, created on 2013-06-20 04:36:35
         compiled from "C:\xampp\htdocs\grace\templates\carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:348851bfbfd40a63a3-99293207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40f76e88fe85168d1adf09ea63e9ac6fe805a3ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\grace\\templates\\carousel.tpl',
      1 => 1371695769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '348851bfbfd40a63a3-99293207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bfbfd40ee161_70111996',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bfbfd40ee161_70111996')) {function content_51bfbfd40ee161_70111996($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Grace Baptist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="flatstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link href="flatstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>
	  /* apply a natural box layout model to all elements */
      * { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }

	  body {
		  padding-bottom: 40px;
		  color: #5a5a5a;
		  background-image: url("img/light_noise_diagonal.png");  
		}
	  
      /* Customize the navbar links to be fill the entire space of the .navbar */
      /*.navbar-stretch .navbar-inner {
        padding: 0;
      }
      .navbar-stretch .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar-stretch .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar-stretch .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.25);
        border-right: 1px solid rgba(0,0,0,.1);
        color: #ddd;
      }
      .navbar-stretch .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar-stretch .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }*/

      .navbar-inner {
        -webkit-border-radius: 4px 4px 0 0;
        -moz-border-radius: 4px 4px 0 0;
        border-radius: 4px 4px 0 0;
        margin-bottom: -20px;
      }


      .carousel-caption {
        padding-right: 115px;
      }

      a {
        color: #00337f;
      }

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push {
        height: 100px;
      }

      footer {
        height: 60px;
        /*background: rgba(153, 0, 0, 1);*/
      }
	  
	  /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

	.navbar-grace .navbar-inner {
	  background-color: hsl(0, 76%, 3%) !important;
	  background-repeat: repeat-x;
	  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#670e0e", endColorstr="#0d0101");
	  background-image: -khtml-gradient(linear, left top, left bottom, from(#670e0e), to(#0d0101));
	  background-image: -moz-linear-gradient(top, #670e0e, #0d0101);
	  background-image: -ms-linear-gradient(top, #670e0e, #0d0101);
	  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #670e0e), color-stop(100%, #0d0101));
	  background-image: -webkit-linear-gradient(top, #670e0e, #0d0101);
	  background-image: -o-linear-gradient(top, #670e0e, #0d0101);
	  background-image: linear-gradient(#670e0e, #0d0101);
	  border-color: #0d0101 #0d0101 hsl(0, 76%, -2%);
	  color: #ddd !important;
	  -webkit-font-smoothing: antialiased;
	}
	
	.navbar-grace .nav > li > a {
	  float: none;
	  padding: 10px 15px 10px;
	  color: #777777;
	  text-decoration: none;
	  text-shadow: 0 0 0 #ffffff !important;
	}
	
	.navbar-grace .brand,
	.navbar-grace .nav > li > a {
	  color: #999999;
	  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	}

	.navbar-grace .brand:hover,
	.navbar-grace .nav > li > a:hover {
	  color: #ffffff;
	}

	.navbar-grace .brand {
	  color: #999999;
	}

	.navbar-grace .navbar-text {
	  color: #999999;
	}

	.navbar-grace .nav > li > a:focus,
	.navbar-grace .nav > li > a:hover {
	  color: #ffffff;
	  background-color: transparent;
	}

	.navbar-grace .nav .active > a,
	.navbar-grace .nav .active > a:hover,
	.navbar-grace .nav .active > a:focus {
	  color: #ffffff;
	  background-color: rgb(44, 10, 10);
	}

	.navbar-grace .navbar-link {
	  color: #999999;
	}

	.navbar-grace .navbar-link:hover {
	  color: #ffffff;
	}

	.navbar-grace .divider-vertical {
	  border-right-color: #222222;
	  border-left-color: #111111;
	}

	.navbar-grace .nav li.dropdown.open > .dropdown-toggle,
	.navbar-grace .nav li.dropdown.active > .dropdown-toggle,
	.navbar-grace .nav li.dropdown.open.active > .dropdown-toggle {
	  color: #ffffff;
	  background-color: #111111;
	}

	.navbar-grace .nav li.dropdown > a:hover .caret {
	  border-top-color: #ffffff;
	  border-bottom-color: #ffffff;
	}

	.navbar-grace .nav li.dropdown > .dropdown-toggle .caret {
	  border-top-color: #999999;
	  border-bottom-color: #999999;
	}

	.navbar-grace .nav li.dropdown.open > .dropdown-toggle .caret,
	.navbar-grace .nav li.dropdown.active > .dropdown-toggle .caret,
	.navbar-grace .nav li.dropdown.open.active > .dropdown-toggle .caret {
	  border-top-color: #ffffff;
	  border-bottom-color: #ffffff;
	}
	
    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */
	
	.carousel-control {
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
    }
	
	.btn-grace {
	  background-color: hsl(0, 76%, 3%) !important;
	  background-repeat: repeat-x;
	  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#670e0e", endColorstr="#0d0101");
	  background-image: -khtml-gradient(linear, left top, left bottom, from(#670e0e), to(#0d0101));
	  background-image: -moz-linear-gradient(top, #670e0e, #0d0101);
	  background-image: -ms-linear-gradient(top, #670e0e, #0d0101);
	  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #670e0e), color-stop(100%, #0d0101));
	  background-image: -webkit-linear-gradient(top, #670e0e, #0d0101);
	  background-image: -o-linear-gradient(top, #670e0e, #0d0101);
	  background-image: linear-gradient(#670e0e, #0d0101);
	  border-color: #0d0101 #0d0101 hsl(0, 76%, -2%);
	  color: #ddd !important;
	  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
	  -webkit-font-smoothing: antialiased;
	}
	</style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
    <div id="wrap">

      <div id="main" class="container">
        
      <div class="row">
      <div class="navbar-wrapper">

			<div class="navbar navbar-grace">
			  <div class="navbar-inner">
				<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</a>
				<a class="brand" href="http://localhost/grace/?page=2">Grace Christian School</a>
				<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
				<div class="nav-collapse collapse">
				  <ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><a href="#">General Information</a></li>
						<li><a href="#">Parent Information</a></li> 
						<li><a href="http://www.facebook.com/gcsdefenders">Current News</a></li>
						<li><a href="#">Location</a></li> 					
					  </ul>
					</li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <b class="caret"></b></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Pre-School</a></li>
						<li><a href="#">Elementary</a></li>                   
						<li><a href="#">High School</a></li>                   				
						<li><a href="#">Teacher's blogs</a></li>                   
					  </ul>
					</li>
					<li><a href="/grace/?page=2">Staff</a></li>
					<li><a href="#contact">Contact</a></li>
				  </ul>
				  <!-- =========Login========== -->
					<ul class="nav pull-right">
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
							<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
								<form method="post" action="login" accept-charset="UTF-8">
									<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
									<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
									<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
									<label class="string optional" for="user_remember_me"> Remember me</label>
									<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">						
								</form>
							</div>
						</li>
					</ul>
				</div><!--/.nav-collapse -->	
			  </div><!-- /.navbar-inner -->
			</div><!-- /.navbar -->

		</div><!-- /.navbar-wrapper -->

        <div class="row-fluid">
          <div class="span12">
              <div id="myCarousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                        <img src="img/cropped1.jpg" alt="">
                        <div class="carousel-caption">
                          <h1>Grace Christian School</h1>
						  <p class="lead"> partners with parents to educate their children with Christ-centered academic excellence enabling them to impact their world for Jesus Christ.</p>
						  <a class="btn btn-large btn-grace" href="#">Sign up today</a>
                        </div>
                      </div>
                  <div class="item">
                        <img src="img/cropped2.jpg" alt="">
                        <div class="carousel-caption">
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                      </div>
                  <div class="item">
                        <img src="img/cropped3.jpg" alt="">
                        <div class="carousel-caption">
                          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </div>
                      </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>                
              </div>
          </div>
        </div>
        <hr>

  <div id="push"></div>
    </div> <!-- /container -->
  </div><!-- end wrap -->
  <footer class="footer" style="text-align: center;">
    <div class="container">
      
    </div>
  </footer>
      <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/docs/assets/js/jquery.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-transition.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-alert.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-modal.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-tab.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-popover.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-button.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/docs/assets/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
<?php }} ?>