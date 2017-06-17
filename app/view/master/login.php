<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<title>Login</title>
    <?php require('../master/gem_styles.html'); ?> <!-- STYLES -->
</head>

<body>
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header ">
                <a class="navbar-brand center"></a>
            </div>
        </div>
    </nav>

    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-image="../../../assets/img/background/cpark.jpg" data-color="">
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form id="form_login" method="#" action="#" onsubmit="return validate_login()">
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="header">
                                        <h3 class="title">Login</h3>
                                    </div>
                                    <div class="content">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input id="f_username" type="text" placeholder="Enter Your Username" class="form-control input-no-border" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="f_password" type="password" placeholder="Password" class="form-control input-no-border" required>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button id="btn_login" type="submit" class="btn btn-fill btn-wd ">LOG-IN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        	<footer class="footer footer-transparent">
                <div class="container">
                    <div class="copyright">
                        &copy;2017<?php if(date("Y")!=2017)echo" - ".date("Y")."";?>, Developed by {INSERT NAME HERE}
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<?php require('../master/gem_js.html'); ?> <!-- JAVASCRIPTS -->
<script src="../../controller/master/login.js" type="text/javascript"></script>

</html>
