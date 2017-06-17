

<div id="modal_form_class" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
            <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> <i class="ti-pencil-alt"></i> Position Form: </h4>
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
              <label>Position Name</label> <star>*</star>
              <input id="f_name" name="f_name" class="form-control border-input" placeholder="Input Position Name" required>
          </div>
      </div>
     <!--  <div class="col-md-12">
          <div class="form-group">
              <label>Address</label>
              <textarea id="f_address" name="f_address" class="form-control border-input" placeholder="Input Address"></textarea>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label>Birthdate</label>
              <input id="f_birthdate" name="f_birthdate" type="date" class="form-control border-input" />
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label>Contact</label>
              <input id="f_contact" name="f_contact" type="number" class="form-control border-input" placeholder="e.g. 09063402309" minLength="11" maxlength="11"/>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
              <label>Position</label><star>*</star>
              <input id="f_position" name="f_position"  class="form-control border-input" placeholder="Choose Position" required />
         
          </div>
      </div> -->
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
