

<div id="modal_form_members" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
            <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> <i class="ti-pencil-alt"></i> Member Form: </h4>
        </div>
        <div class="modal-body" >

        <div id="div_modal_form" class="row">
          <div class="col-xs-12" >

          <div class="content">

<!--form start-->
<form  id="form_members" action="" method="" novalidate="" onsubmit="return save_form_members()">
  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label>Name</label> <star>*</star>
              <input id="f_name" name="f_name" class="form-control border-input" placeholder="Input Class Name" required="true">
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
              <label>Contact</label> <star>*</star>
              <input id="f_contact" name="f_contact" type="number" class="form-control border-input">
          </div>
      </div>

  </div>

  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label>Address</label> <star>*</star>
              <textarea id="f_address" name="f_address" class="form-control border-input"></textarea>
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-6">
          <div class="form-group">
              <label>Birthdate</label> <star>*</star>
              <input id="f_birthdate" name="f_birthdate" type="date" class="form-control border-input" >
          </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
              <label>Gender</label> <star>*</star>
              <select id="f_gender" name="f_gender"  class="form-control border-input">
                <option value="m">Male</option>
                <option value="f">Female</option>
              </select>
          </div>
      </div>
  </div>





  <div class="text-center">
<!--       <button id="btn_clear" onclick="clear_form_members()" type="button" class=" btn btn-primary" style="display:none" > RESET </button>   -->
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
