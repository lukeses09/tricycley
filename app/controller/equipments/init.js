var validator = $('#form_class').validate();
var table_main = $('#table_main').dataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    responsive: true,
    language: {
    search: "_INPUT_",
        searchPlaceholder: "Search Here",
    }
});

$(document).ready(function(){
	load();
});

function load(){
menu_settings.page_name("Equipments");
populate_table_main();
menu_settings.menu_name2("maintenance","equipments");
dropdown_category()
}

function populate_table_main(){
	// ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../model/equipment/populate_table_main.php",
	  dataType: 'json',
	  cache: false,
	  success: function(s)
	  {
	    table_main.fnClearTable();
	    for(var i = 0; i < s.length; i++)
	    {
	    	var enability = 'enabled'; //for property of enabled/disabled
	    	// if(s[i][?]=='inactive'){enability='disabled';} //set enability value
	      	// var btn_view = '<button value="'+s[i][0]+'" data-toggle="tooltip" data-placement="top" title="View Products" onclick="view_product(this.value);" class="btn btn-simple btn-primary" '+enability+'><i class="ti-package"></i> </button>';
	      	var btn_update = '<button value="'+s[i][0]+'" data-toggle="tooltip" data-placement="top" title="Update Record" onclick="row_update(this.value);" class="btn btn-simple btn-warning" '+enability+'><i class="ti-pencil"></i></button>';
	      	var btn_remove = '<button value="'+s[i][0]+'" data-toggle="tooltip" data-placement="top" title="Delete Record" onclick="row_remove(this.value);" class="btn btn-simple btn-danger" '+enability+'><i class="ti-close"></i></button>';
	      table_main.fnAddData
	      ([
	        s[i][1],s[i][2],s[i][3],s[i][4],btn_update+btn_remove,
	      ],false);
	      table_main.fnDraw();

	    }
	  }
	});
	// //ajax end
}


function dropdown_category(){
  //ajax now
  $.ajax ({
    type: "POST",
    url: "../../model/equipment/dropdown_category.php",
    dataType: 'json',
    cache: false,
    success: function(s)
    {
      $('#f_category').empty();
      // $('#f_industry').html('<option selected="selected" value="none">--SEARCH PRODUCT--</option>');
      for(var i = 0; i < s.length; i++) {
        $('#f_category').append('<option id="opt'+s[i][0]+'" value="'+s[i][0]+'">'+s[i][1]+'</option>');
      }
    }
  });
  //ajax end
  // $('#doc_product').select2().select2('val','none');
} //

function datalist_category(){
  //ajax now
  $.ajax ({
    type: "POST",
    url: "../../model/equipment/datalist_category.php",
    dataType: 'json',
    cache: false,
    success: function(s)
    {
      $('#dl_category').empty();
      // $('#f_industry').html('<option selected="selected" value="none">--SEARCH PRODUCT--</option>');
      for(var i = 0; i < s.length; i++) {
        $('#dl_category').append('<option id="opt'+s[i][0]+'" value="'+s[i][0]+'">'+s[i][0]+'</option>');
      }
    }
  });
  //ajax end
  // $('#doc_product').select2().select2('val','none');
} //


function save_form_class(){
	if($('#form_class').valid()==true){ // will save
		disable_save_buttons_prop(true);

    var dataString =  {
      f_name : $(`#f_name`).val(),
      f_category : $(`#f_category`).val(),
      f_price : $(`#f_price`).val(),
      f_no_items : $(`#f_no_items`).val()
    }
		var mode = $('#btn_save').val();
	if(mode=='CREATE'){
    // console.log(dataString)
		//ajax now
		$.ajax ({
		  type: "POST",
		  url: "../../model/equipment/create.php",
		  data: dataString,
		  // dataType: 'json',
		  success: function(x){
      console.log(x)
	  	if(x==0)
				swal('Saved!', 'New Record Created!','success');
			else if(x==1)
				swal('Failed!', 'Something went wrong...','error');

			populate_table_main(); //refresh table
			clear_form_class();
		  },
		});
		//ajax end
	}
	else{
    dataString.id = mode
    // console.log(dataString)
		//ajax now
		$.ajax ({
		  type: "POST",
		  url: "../../model/equipment/update.php",
		  data: dataString,
		  // dataType: 'json',
		  success: function(x){
		  	if(x==0)
				swal('Updated!', ' Record has been Updated!','success');
			else if(x==1)
				swal('Failed!', 'Something went wrong...','error');
			populate_table_main(); //refresh table
			clear_form_class();
		  },
		});
		//ajax end
	}


	}
	return false;
}


function row_update(id){
	clear_form_class();
  	$('#btn_save').text('UPDATE');
  	$('#btn_save').removeClass('btn-info'); $('#btn_save').addClass('btn-warning');
  	$('#btn_clear').css('display','block');
	$('#btn_save').val(id);
	// ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../model/equipment/fetch.php",
	  data: 'id='+id,
	  dataType: 'json',
	  cache: false,
	  success: function(s){
      console.log(s)
	  	$('#f_name').val(s[0][1]);
	  	$('#f_category').val(s[0][2]);
	  	$('#f_price').val(parseFloat(s[0][3]));
	  	$('#f_no_items').val(parseFloat(s[0][4]));
	  	$('#btn_save').text('UPDATE');
	  }
	});
	// //ajax end
	$('#modal_form_class').modal('show');
}

function disable_save_buttons_prop(get){
	$('#btn_save').prop('disabled',get);
	$('#btn_clear').prop('disabled',get);
}

function clear_form_class(){
 	$('#btn_save').text('CREATE');
  	$('#btn_save').removeClass('btn-warning'); $('#btn_save').addClass('btn-info');
  	$('#btn_clear').css('display','none');
	$('#btn_save').val('CREATE');
	disable_save_buttons_prop(false);
	$('#f_name').val('');
	$('#f_category').val('');
	$('#f_price').val('');
	$('#f_no_items').val('');

}

function row_remove(id){
	swal({
	  title: "Confirm Delete?",
	  text: "Are you sure you want to delete this Supplier and all of it's record? You won't be able to revert this!",
	  type: "warning",
	  showCancelButton: true,
      confirmButtonClass: "btn btn-info btn-fill",
	  confirmButtonText: "Yes, Delete it!",
	  cancelButtonText: "No, Cancel",
	  closeOnConfirm: false,
	  closeOnCancel: false
	},
	function(isConfirm){
	  if (isConfirm) {
	  	delete_form_class(id);
	  } else {
	    swal("Cancelled", "Record deletion was cancelled", "error");
	  }
});



}
function delete_form_class(id){
		//ajax now
		$.ajax ({
		  type: "POST",
		  url: "../../model/equipment/delete.php",
		  data: 'id='+id,
		  // dataType: 'json',
		  cache: false,
		  success: function(x){
		  if(x==0){swal("Deleted!", "Class record has been successfully deleted", "success");}
		  if(x==1){swal("Failed!!", "Something went wrong...", "error");}
		  if(x==2){swal("Cannot Be Deleted!", "Class is recorded to another Document", "warning");}
	  	  populate_table_main();
		  },
		  error: function(x){	swal('Failed!', 'Something went wrong...','error');}
		});
		//ajax end
}


$('#btn_create').click(function(){
	clear_form_class();
	$('#modal_form_class').modal('show');
})

$(`#f_category`).on(` focus`,function(){
  datalist_category()
})

function view_product(sup_id){
  $('<form action="../../view/manage_product/init.php" method="GET" target="_new">' +
    '<input type="hidden" name="sup_id" value="'+sup_id+'">' +
    '</form>').submit();
}
