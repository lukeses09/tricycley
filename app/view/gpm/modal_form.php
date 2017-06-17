

<div id="modal_form_gpm" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
            <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> <i class="ti-pencil-alt"></i> GPM Form: </h4>
        </div>          
        <div class="modal-body" >

        <div id="div_modal_form" class="row">
          <div class="col-xs-12" >

          <div class="content">

<!--form start-->
<form  id="form_gpm" action="" method="" novalidate="" onsubmit="return save_form_gpm()">

  <div class="row">
      <div class="col-md-3">
          <div class="form-group">
              <label>Gross</label> <star>*</star>
              <input type="number" id="f_gross" name="f_gross" class="form-control" max="999999999.99" required="true">
          </div>
      </div><!--end col-md-3-->  
      <div class="col-md-3">
          <div class="form-group">
              <label>Net</label> <star>*</star>
              <input type="number" id="f_net" name="f_net" class="form-control" max="999999999.99" required="true">
          </div>
      </div><!--end col-md-3-->  

			<div class="col-md-3">
				<div class="form-group">
					<label>Year</label><star>*</star>
					<select id="f_year" name="f_year" class="form-control" required="true">
					</select>
				</div><!--end form-group-->
			</div><!--end col-md-3-->
			<div class="col-md-3">
				<div class="form-group">
					<label>Month</label><star>*</star>
					<select id="f_month" name="f_month" class="form-control" required="true">
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="4">April</option>
						<option value="5">May</option>
						<option value="6">June</option>
						<option value="7">July</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
				</div><!--end form-group-->
			</div><!--end col-md-3-->


</div><!--end row-->
<!-- 
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label>GPM %</label> <star>*</star>
              <div class="input-group">
                <input type="number" id="f_gpm" name="f_gpm" class="form-control" max="99.99" required="true">
                <span class="input-group-addon">%</span>                
              </div>          
          </div>
      </div>

  </div> -->




  </div>  
  <div class="text-center">
<!--       <button id="btn_clear" onclick="clear_form_gpm()" type="button" class=" btn btn-primary" style="display:none" > RESET </button>   -->               
      <button id="btn_save" value="CREATE" type="submit" class="btn btn-info btn btn-fill">CREATE</button>                                             
  </div>
  <div class="clearfix"></div>
</form>
 <!--end form-->
        



          </div><!--end content-->

    

          </div><!--end col  -->
        </div><!--div modal form row-->


        </div><!--end modal-body-->

    </div>
  </div>
</div> 
