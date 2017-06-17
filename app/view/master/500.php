<?php include('../../controller/master/log.php') ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<title>User Priveleges</title>
	<?php require('../master/gem_styles.html'); ?>
</head>

<body>
<?php include('../master/layout-top.php') ?>


<div class="row">
	<div id="error-page" style="display:block"> 
		<h2 class="headline text-yellow"><img src="../../../assets/img/gear.png" style="max-width: 150px; max-height: 150px"> </h2>
		<div class="error-content">
			<h3 class="text-center">User Mode</h3><hr>
			<p class="text-center">You are currently logged in as User</p>
		</div><!-- /.error-content -->
	</div><!-- /.error-page -->
</div> <!-- end row -->



<?php include('../master/layout-bottom.php') ?>
</body>

<?php require('../master/gem_js.html'); ?>

</html>
