var validator = $('#form_members').validate();


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
menu_settings.page_name("Members");
populate_table_main();
// menu_name2("manage","manage_members");
}

function populate_table_main(){
	// populate_dropdown_class();
	// ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../model/member/populate_table_main.php",
	  dataType: 'json',
	  cache: false,
	  success: function(s)
	  {
      // console.log(s)
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
	        s[i][1],s[i][2],s[i][3],s[i][4],(s[i][5] == 'm' ? 'Male' : 'Female'),
          btn_update+btn_remove,
	      ],false);
	      table_main.fnDraw();

	    }
	  }
	});
	// //ajax end
}


function populate_dropdown_class(){
  //ajax now
  $.ajax ({
    type: "POST",
    url: "../../model/class/populate_table_main.php",
    dataType: 'json',
    cache: false,
    success: function(s)
    {
      $('#f_class').empty();
      $('#f_class').html('<option selected="selected" value="">SELECT CLASS</option>');
      for(var i = 0; i < s.length; i++) {
        $('#f_class').append('<option id="opt'+s[i][0]+'" value="'+s[i][0]+'"">'+s[i][1]+'</option>');
      }
    }
  });
  //ajax end
  // $('#doc_product').select2().select2('val','none');
} //

function save_form_members(){
	if($('#form_members').valid()==true){ // will save
		disable_save_buttons_prop(true);
    var dataString = {
      f_name: $(`#f_name`).val(),
      f_address: $(`#f_address`).val(),
      f_contact: $(`#f_contact`).val(),
      f_gender: $(`#f_gender`).val(),
      f_birthdate: $(`#f_birthdate`).val()
    }
    console.log(dataString)
		var mode = $('#btn_save').val();
	if(mode=='CREATE'){
		//ajax now
		$.ajax ({
		  type: "POST",
		  url: "../../model/member/create.php",
		  data: dataString,
		  // dataType: 'json',
		  success: function(x){
		  	if(x==0)
				swal('Saved!', 'New members Record Created!','success');
			else if(x==1)
				swal('Failed!', 'Something went wrong...','error');
			else if(x==2)
				swal('Duplicate!', 'Cannot be saved, members Record with the same MONTH & YEAR already exist in the datatables','warning');

			populate_table_main(); //refresh table
			clear_form_members();
		  },
		});
		//ajax end
	}
	else{
		//ajax now
		$.ajax ({
		  type: "POST",
		  url: "../../model/member/update.php",
		  data: dataString.id = mode,
		  // dataType: 'json',
		  success: function(x){
        // console.log(dataString)
		  	if(x==0)
				swal('Updated!', 'members Record has been Updated!','success');
			else if(x==1)
				swal('Failed!', 'Something went wrong...','error');
			populate_table_main(); //refresh table
			clear_form_members();
		  },
		});
		//ajax end
	}


	}
	return false;
}


function row_update(id){
	clear_form_members();
  	$('#btn_save').text('UPDATE');
  	$('#btn_save').removeClass('btn-info'); $('#btn_save').addClass('btn-warning');
  	$('#btn_clear').css('display','block');
	$('#btn_save').val(id);
	// ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../model/member/fetch.php",
	  data: 'id='+id,
	  dataType: 'json',
	  cache: false,
	  success: function(s){
      $(`#f_name`).val(s[0][1])
      $(`#f_address`).val(s[0][2])
      $(`#f_contact`).val(s[0][3])
      $(`#f_birthdate`).val(s[0][4])
      $(`#f_gender`).val(s[0][5])
	  	$('#btn_save').text('UPDATE');
	  }
	});
	// //ajax end
	$('#modal_form_members').modal('show');
}

function disable_save_buttons_prop(get){
	$('#btn_save').prop('disabled',get);
	$('#btn_clear').prop('disabled',get);
}

function clear_form_members(){
 	$('#btn_save').text('CREATE');
  	$('#btn_save').removeClass('btn-warning'); $('#btn_save').addClass('btn-info');
  	$('#btn_clear').css('display','none');
	$('#btn_save').val('CREATE');
	disable_save_buttons_prop(false);
  $(`#f_name`).val(``)
  $(`#f_address`).val(``)
  $(`#f_birthdate`).val(``)
  $(`#f_gender`).val(`m`)
  $(`#f_contact`).val(``)
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
	  	delete_form_members(id);
	  } else {
	    swal("Cancelled", "Record deletion was cancelled", "error");
	  }
	});

}
function delete_form_members(id){
	//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../model/member/delete.php",
	  data: 'id='+id,
	  // dataType: 'json',
	  cache: false,
	  success: function(x){
	  if(x==0){swal("Deleted!", "members record has been successfully deleted", "success");}
	  if(x==1){swal("Failed!!", "Something went wrong...", "error");}
	  if(x==2){swal("Cannot Be Deleted!", "members is recorded to another Document", "warning");}
  	  populate_table_main();
	  },
	  error: function(x){	swal('Failed!', 'Something went wrong...','error');}
	});
	//ajax end
}


$('#btn_create').click(function(){
	clear_form_members();
	$('#modal_form_members').modal('show');
})

function view_product(sup_id){
  $('<form action="../../view/manage_product/init.php" method="GET" target="_new">' +
    '<input type="hidden" name="sup_id" value="'+sup_id+'">' +
    '</form>').submit();
}
