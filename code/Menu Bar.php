<?php 
session_start();
$eid = $_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<!--Menu Bar Close Here-->
<div class="banner-top">
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">HOSHI <span>HOTEL</span><p class="logo_w3l_agile_caption">Your Dreamy Hotel</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							
						</ul>
						<ul class="nav navbar-nav menu__list navbar-right">
        
        					<li><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        				<?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
              
        	</ul>
        </li>
        <?PHP } else
		{
		?>
		<li><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
        </li>
		<?php 
		} ?>
      </ul>
	</nav>
</div>
</nav>

		</div>
	</div>
					
