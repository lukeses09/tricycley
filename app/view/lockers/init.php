<?php include('../../controller/master/log.php') ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<title>Lockers</title>
	<?php require('../master/gem_styles.html'); ?>
	<style>
		div.locker{
			text-align: center;
			border: solid #66615B 5px;
			height:100px;
			padding: 30px;
			background-color: #54B07D;
			color: white;
		}
	</style>
</head>

<body>
<?php include('modal_form.php') ?>
<?php include('../master/layout-top.php') ?>

<div class="row">
	<div class="col-xs-12">
		<button id="btn_create" class="btn btn-fill btn-info btn-lg pull-right">ADD NEW LOCKER GROUP</button>
	</div><!--end col 12-->
</div><!--end row-->



<div class="row">

    <div class="col-md-12">
		<h4 class="title"></h4>
        <!-- <p class="category">Create, Find, View, Update and Delete Records through the table. Click on the Action Buttons at the last columns of each row.</p> -->
				<div class="card">
          <div class="content">
            <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                  <li class="active"><a href="#locker-groups" data-toggle="tab" aria-expanded="true">Locker Groups</a></li>
                  <li><a href="#lockers" data-toggle="tab" aria-expanded="false">Lockers</a></li>
              </ul>
            </div>
	          </div>
	          <div id="my-tab-content" class="tab-content text-center">
	              <div class="tab-pane active" id="locker-groups">

	                <div class="fresh-datatables">
										<table id="table_main" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
			                <thead>
			                  <tr>
			                    <th>Locker Group</th>
			                    <th>Description</th>
			                    <th>Row</th>
			                    <th>Col</th>
													<th style="min-width:160px" class="disabled-sorting">Actions</th>
			                  </tr>
			                  <tbody></tbody>
			                </thead>
								    </table>
									</div>

	              </div>
	              <div class="tab-pane" id="lockers">
									<div class="row">
										<div class="col-xs-2"></div>
										<div class="col-xs-8">
					          	<select id="f_group" name="f_group" class="form-control input-lg border-input"></select>
										</div><!--end col-->
										<div class="col-xs-2"></div>
									</div><!--end row-->
									<hr>
									<div id="locker-content">
									</div><!--end row-->
	              </div>
	          </div>
          </div>
        </div>


    </div> <!-- end col-md-12 -->
</div> <!-- end row -->



<?php include('../master/layout-bottom.php') ?>
</body>

<?php require('../master/gem_js.html'); ?>
<script type="text/javascript" src="../../controller/lockers/init.js"></script>

</html>
