<?php /* Smarty version Smarty-3.1.13, created on 2013-06-18 04:03:15
         compiled from "C:\xampp\htdocs\grace\templates\Enrollment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3007851bfbfe334fcb4-67421458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fc706dfab68cf9524aa23efddbcadcf6ae37335' => 
    array (
      0 => 'C:\\xampp\\htdocs\\grace\\templates\\Enrollment.tpl',
      1 => 1371520572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3007851bfbfe334fcb4-67421458',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bfbfe339eb39_39098820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bfbfe339eb39_39098820')) {function content_51bfbfe339eb39_39098820($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Enrollment</title>
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
				<li><a href="http://www.facebook.com/gcsdefenders">Current News</a></li>
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
			<div class="well">
				<h2 class="muted">Pre-School</h2>
				<p><span class="label">POPULAR</span></p>
				<ul>
					<li>10 users</li>
					<li>Unlimited access</li>
					<li>3TB of space</li>
					<li>E-mail support</li>
				</ul>          
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
				<hr>
				<h3>$15.99 / month</h3>
				<hr>
				<p><a class="btn btn-large btn-grace" href="#"><i class="icon-ok"></i> Select plan</a></p>
			</div>
		</div>
		<div class="span4">
			<div class="well">
				<h2 class="text-warning">K - 12</h2>
				<p><span class="label label-success">POPULAR</span></p>
				<ul>
					<li>20 users</li>
					<li>Unlimited access with no limits</li>
					<li>5TB of space</li>
				</ul>          
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
				<hr>
				<h3>$10.99 / month</h3>
				<hr>
				<p><a class="btn btn-success btn-large btn-grace" href="#"><i class="icon-ok"></i> Select plan</a></p>
			</div>
		</div>
		<div class="span4">
			<div class="well">
				<h2 class="text-info">Payment Options</h2>
				<p><span class="label label-info">BUDGET</span></p>
				<ul>
					<li>10 users</li>
					<li>5TB of space</li>
				</ul>          
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
				<hr>
				<h3>$8.99 / month</h3>
				<hr>
			  <p><a class="btn btn-large btn-grace" href="#"><i class="icon-ok"></i> Select plan</a></p>
			</div>
		</div>
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