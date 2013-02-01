  <head>
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
        padding-bottom: 40px;
      }
	  
	  a {
		color: hsl(0, 76%, 3%) !important;
		text-decoration: none;
	  }
	  
	  h1, h2, h3, h4, h5, h6 {
		margin: 10px 0;
		font-family: inherit;
		font-weight: bold;
		line-height: 20px;
		color: #3e0808;
		text-rendering: optimizelegibility;
     }
	 
	 .nav .dropdown-toggle .caret {
		margin-top: 6px;
		border-top-color: hsl(0, 76%, 3%);
		border-bottom-color: hsl(0, 76%, 3%);
     }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
	  
	  .nav-pills > .active > a,
	  .nav-pills > .active > a:hover {
	    color: #ddd !important;
  	    background-color: transparent;
	  }


      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
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

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
			<li class="active btn-grace"><a href="http://localhost/grace/?page=4">Home</a></li>
			<!--<li><a href="#">Current News</a></li>-->
			<li><a href="#">Contact Us</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu Options<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">General Info</a></li>
					<li><a href="#">Location</a></li>
					<li><a href="#">Calendar</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="#">Pre-School</a></li>
					<li><a href="#">K-12</a></li>
					<li><a href="#">Parent Info</a></li>
					<li><a href="#">GCS Staff</a></li>
				</ul>
			</li>	  
			<!--<li><a href="#">Log In</a></li>-->
			<!--<ul class="nav pull-right">-->
				<li class="divider-vertical"></li>
				<li class="dropdown">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
					<div class="dropdown-menu" style="padding: 5px; padding-bottom: 0px;">
						<form method="post" action="login" accept-charset="UTF-8">
							<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
							<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
							<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
							<label class="string optional" for="user_remember_me"> Remember me</label>
							<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
						</form>
					</div>
				</li>
			<!--</ul>	-->		
        </ul>
		<h3 style="color: hsl(0, 76%, 3%)">Grace Christian School</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1 style="font-size: 60px;">Grace Christian School</h1>
        <p class="lead">assisting the home and church, provides a nurturing, Christ-centered, spiritual, academic and physical atmosphere to produce disciples who will have a transforming impact on their world.</p>
        <a class="btn btn-large btn-grace" href="#">Contact Us</a>
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>We offer the these education levels :</h4>
          <ul>
				<li>3 & 4 year old Pre-School</li>
				<li>Elementary School (Kindergarten - 6th Grade)</li>
				<li>Middle School (7th & 8th Grade)</li>
				<li>High School (9th - 12th Grade)</li>
		  </ul>
        </div>

        <div class="span6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>

      <hr>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>If you have any questions, please contact us at <a href="mailto:grace_christian_defenders@yahoo.com?subject=Website Inquiry">Grace_Christian_Defenders@yahoo.com</a><br /> or call us at 989-793-2129</p>
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
