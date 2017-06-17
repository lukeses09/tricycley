

<div id="modal_form_class" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
            <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> <i class="ti-pencil-alt"></i> Class Form: </h4>
        </div>
        <div class="modal-body" >

        <div id="div_modal_form" class="row">
          <div class="col-xs-12" >

          <div class="content">

<!--form start-->
<form  id="form_class" action="" method="" novalidate="" onsubmit="return save_form_class()">
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label>Name</label> <star>*</star>
              <input id="f_name" name="f_name" class="form-control border-input" placeholder="Input Class Name" required>
          </div>
      </div>
      <!-- <div class="col-md-12">
          <div class="form-group">
              <label>Description</label>
              <textarea id="f_description" name="f_description" class="form-control border-input" placeholder="Input Description"></textarea>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label>Duration</label><star>* in days</star>
              <input id="f_duration" name="f_duration" type="number" class="form-control border-input" placeholder="Input Duration" min="1" required/>
          </div>
      </div> -->
      <div class="col-md-6">
          <div class="form-group">
              <label>Charge</label><star>*</star>
              <input id="f_charge" name="f_charge" type="number" class="form-control border-input" placeholder="Input Amount" min="1" required/>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-3">
          <div class="form-group">
              <label>Start Time</label><star>*</star>
              <input id="f_start_time" name="f_start_time" class="timepicker form-control border-input" required/>
          </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">
              <label>End Time</label><star>*</star>
              <input id="f_end_time" name="f_end_time" class="timepicker form-control border-input" required/>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label>Instructor</label><star>*</star>
              <select id="f_instructor" name="f_instructor" class=" form-control border-input" /></select>
          </div>
      </div>
  </div>


  <div class="text-center">
<!--       <button id="btn_clear" onclick="clear_form_class()" type="button" class=" btn btn-primary" style="display:none" > RESET </button>   -->
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
