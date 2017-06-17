<?php include('../../controller/master/log.php') ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<title>Employees</title>
	<?php require('../master/gem_styles.html'); ?>
</head>

<body>
<?php include('modal_form.php') ?>
<?php include('../master/layout-top.php') ?>

<div class="row">
	<div class="col-xs-12">
		<button id="btn_create" class="btn btn-fill btn-info btn-lg pull-right">ADD NEW</button>
		
	</div><!--end col 12-->
</div>
<!--end row-->



<div class="row">

    <div class="col-md-12">
		<h4 class="title"></h4>
        <!-- <p class="category">Create, Find, View, Update and Delete Records through the table. Click on the Action Buttons at the last columns of each row.</p> -->
        <div class="card">
            <div class="content">
                <div class="toolbar">
                    <!--Here you can write extra buttons/actions for the toolbar-->
                </div>
                <div class="fresh-datatables">
				<table id="table_main" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
		                <thead>
		                  <tr>
		                    <th>Position Name</th>
		                    <th style="min-width:160px" class="disabled-sorting">Actions</th>
		                  </tr>
		                  <tbody></tbody>
		                </thead>
				    </table>
				</div>


            </div>
        </div><!--  end card  -->
    </div> <!-- end col-md-12 -->
</div> <!-- end row -->



<?php include('../master/layout-bottom.php') ?>
</body>

<?php require('../master/gem_js.html'); ?>
<script type="text/javascript" src="../../controller/positions/init.js"></script>

</html>
