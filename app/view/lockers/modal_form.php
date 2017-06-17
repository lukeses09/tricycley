

<div id="modal_form_class" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
            <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> <i class="ti-pencil-alt"></i> Locker Group Form: </h4>
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
              <label>Locker Group Name</label> <star>*</star>
              <input id="f_name" name="f_name" class="form-control border-input" placeholder="Input Group Name" required>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label>Description</label>
              <textarea id="f_description" name="f_description" class="form-control border-input" placeholder="Input Group Name"></textarea>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
            <label>Rows</label><star>*</star>
            <input id="f_row" name="f_row" type="number"  class="form-control border-input" max="6" min="1" required/>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <label>Columns</label><star>*</star>
            <input id="f_col" name="f_col" type="number" class="form-control border-input" max="6" min="1" required/>
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
