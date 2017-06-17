	<div class="wrapper">
	    <div class="sidebar" data-background-color="white" data-active-color="danger">
	    <!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | brown"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="logo">
				<a href="#" class="simple-text">
					<img src="../../../assets/img/favicon.png" style="min-width:180px; max-width:180px; " />
				</a>
			</div>
			<div class="logo logo-mini">
				<a href="#" class="simple-text">
					GYM
				</a>
			</div>
	    	<div class="sidebar-wrapper">
          <?php require('../master/sidebar.php') ?>
	    	</div>
	    </div>

	    <div class="main-panel sidebar-mini">
	        <nav class="navbar navbar-default">
	            <div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
					</div>
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
	                    <a class="navbar-brand" href="" id="page_name"></a>
	                    <text class="navbar-brand"></text>
	                </div>
	                <div class="collapse navbar-collapse ">
	                    <ul class="nav navbar-nav navbar-right">
	                        <li class="dropdown">
	                            <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
	                                <i class="ti-settings"></i>
	                                <span class="notification"><text id="username"><?php echo(ucwords($cloudipark_level) ); ?> Preferences</text></span>
									<p class="hidden-md hidden-lg">
										<b class="caret"></b>
									</p>
	                            </a>
	                            <ul class="dropdown-menu">
	                                <?php if($cloudipark_level=='admin'){?>
		                                <li><a href="../user/init.php">User Accounts</a></li>
	                                <?php } ?>
	                                <li><a href="javascript:misc.logout()">Log Out</a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div><!-- end collapse settings -->
	            </div>
	        </nav>

<div class="content ">
    <div class="container-fluid">
