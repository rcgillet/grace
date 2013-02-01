<?php /* Smarty version Smarty-3.1.13, created on 2013-02-01 19:56:28
         compiled from "C:\xampp\htdocs\grace\templates\hero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27766510925f08aebf1-72759270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f224c0b3496ca693ae1702e4fcdc2d6a5b243a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\grace\\templates\\hero.tpl',
      1 => 1359744987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27766510925f08aebf1-72759270',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_510925f08e7297_65671141',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510925f08e7297_65671141')) {function content_510925f08e7297_65671141($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Grace Baptist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
		background-image: url("../grace/bootstrap/docs/assets/img/examples/light_noise_diagonal.png") !important;
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
	
	h1, h2, h3, h4, h5, h6 {
      margin: 10px 0;
	  font-family: inherit;
	  font-weight: bold;
	  line-height: 20px;
	  color: #3e0808 !important;
	  text-rendering: optimizelegibility;
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
    <link href="bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/docs/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/docs/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="bootstrap/docs/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="bootstrap/docs/assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-grace navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Grace Christian School</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">Current News</a></li>
				<li><a href="#contact">General Info</a></li>
				<li><a href="#contact">Contact Us</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#contact">Location</a></li>
						<li><a href="#contact">Calendar</a></li>
						<li><a href="#contact">Sports</a></li>
						<li><a href="#contact">Pre-School</a></li>
						<li><a href="#contact">K-12</a></li>
						<li><a href="#contact">Parent Info</a></li>
						<li><a href="#contact">Students</a></li>
						<li><a href="#contact">GCS Staff</a></li>
					</ul>
				</li>
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
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Grace Christian School</h1>
        <p>.... assisting the home and church, provides a nurturing, Christ-centered, spiritual, academic and physical atmosphere to produce disciples who will have a transforming impact on their world.</p>
        <p><a class="btn btn-primary btn-large btn-grace">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Upcoming Events</h2>
          <p>A calendar that includes field trips, sporting events, planned days off, and other important dates.</p>
          <p><a class="btn btn-grace" href="#">Calendar &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Location</h2>
          <p>A detailed map of the location of Grace Christian School as well as directions to the school from wherever you may be.</p>
          <p><a class="btn btn-grace" href="#">Location & Directions &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Staff</h2>
          <p>A list of the Grace Christian School staff that is willing to work with your children on a more personal level.</p>
          <p><a class="btn btn-grace" href="#">Staff &raquo;</a></p>
        </div><!-- /.span4 -->
      </div>

      <hr>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>If you have any questions, please contact us at <a href="mailto:grace_christian_defenders@yahoo.com?subject=Website Inquiry">Grace_Christian_Defenders@yahoo.com</a> or call us at 989-793-2129</p>
      </footer>

    </div> <!-- /container -->

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

  </body>
</html>
<?php }} ?>