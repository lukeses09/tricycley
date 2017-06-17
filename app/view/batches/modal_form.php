

<div id="modal_form_batches" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
            <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> <i class="ti-pencil-alt"></i> Batches Form: </h4>
        </div>
        <div class="modal-body" >

        <div id="div_modal_form" class="row">
          <div class="col-xs-12" >

          <div class="content">

<!--form start-->
<form  id="form_batches" action="" method="" novalidate="" onsubmit="return save_form_batches()">

  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label>Start</label> <star>*</star>
              <input type="number" id="f_start" name="f_start" class="form-control" max="99999" required="true">
          </div>
      </div><!--end col-md-3-->
      <div class="col-md-6">
          <div class="form-group">
              <label>End</label> <star>*</star>
              <input type="number" id="f_end" name="f_end" class="form-control" max="99999" required="true">
          </div>
      </div><!--end col-md-3-->

</div><!--end row-->
<!--
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label>batches %</label> <star>*</star>
              <div class="input-group">
                <input type="number" id="f_batches" name="f_batches" class="form-control" max="99.99" required="true">
                <span class="input-group-addon">%</span>
              </div>
          </div>
      </div>

  </div> -->




  </div>
  <div class="text-center">
<!--       <button id="btn_clear" onclick="clear_form_batches()" type="button" class=" btn btn-primary" style="display:none" > RESET </button>   -->
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
