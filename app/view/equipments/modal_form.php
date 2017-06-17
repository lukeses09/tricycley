

<div id="modal_form_class" class="modal fade" >
  <div class="modal-dialog">
    <div class="modal-content" >
        <div class="modal-header">
            <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"> <i class="ti-pencil-alt"></i> Equipment Form: </h4>
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
              <label>Equipment Name</label> <star>*</star>
              <input id="f_name" name="f_name" class="form-control border-input" placeholder="Input Item Name/Description" required>
          </div>
      </div>
  </div>

  <div class="row">
    <div class="col-md-6">
          <div class="form-group">
              <label>No. of Items</label><star>*</star>
              <input id="f_no_items" name="f_no_items" type="number" class="form-control border-input" placeholder="Input Number of Items" min="1" required/>
          </div>
      </div>
      <div class="col-md-6">
           <div class="form-group">
              <label>Category</label><star>*</star>
              <select id="f_category" name="f_category"  class="form-control border-input" placeholder="Choose Category" ></select>
         </div>
      </div>

      <div class="col-md-6">
          <div class="form-group">
              <label>Price</label><star>*</star>
              <input id="f_price" name="f_price" type="number" class="form-control border-input" placeholder="Input Amount" min="1" required/>
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
