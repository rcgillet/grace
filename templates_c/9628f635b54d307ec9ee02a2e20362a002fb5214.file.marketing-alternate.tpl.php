<?php /* Smarty version Smarty-3.1.13, created on 2013-02-01 20:15:34
         compiled from "C:\xampp\htdocs\grace\templates\marketing-alternate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17169510925e5265a16-18423326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9628f635b54d307ec9ee02a2e20362a002fb5214' => 
    array (
      0 => 'C:\\xampp\\htdocs\\grace\\templates\\marketing-alternate.tpl',
      1 => 1359746126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17169510925e5265a16-18423326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_510925e52b0ab9_86049130',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_510925e52b0ab9_86049130')) {function content_510925e52b0ab9_86049130($_smarty_tpl) {?>  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="bootstrap/docs/assets/css/application.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        'border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
	  	
	  h1, h2, h3, h4, h5, h6 {
        margin: 10px 0;
	    font-family: inherit;
	    font-weight: bold;
	    line-height: 20px;
   	    color: #3e0808 !important;
	    text-rendering: optimizelegibility;
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

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Grace Christian School</h3>
        <div class="navbar navbar-grace">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="http://localhost/grace/?page=1">Home</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Information <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">General Information</a></li>
                    <li><a href="#">Parent Information</a></li> 
					<li><a href="#">Current News</a></li>
					<li><a href="#">Location</a></li> 					
                  </ul>
                </li>
				<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Pre-School</a></li>
                    <li><a href="#">K-12</a></li>                   
                    <li class="divider"></li>
                    <li class="nav-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
			    <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->	
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1 style="font-size: 90px">Grace Christian School</h1>
        <p class="lead">Assisting the home and church, provides a nurturing, Christ-centered, spiritual, academic and physical atmosphere to produce disciples who will have a transforming impact on their world.</p>
        <a class="btn btn-large btn-grace" href="#">Get started today</a>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
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

  </body><?php }} ?>