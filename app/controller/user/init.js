	var validator = $('#f_user').validate();


$('#table_main').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
    responsive: true,
    language: {
    search: "_INPUT_",
        searchPlaceholder: "Search Here",
    }
});


var table_main = $('#table_main').dataTable();

page_name("User Account");
populate_table_main();


function populate_table_main(){ 
	// ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../model/user/populate_table_main.php",
	  dataType: 'json',      
	  cache: false,
	  success: function(s)
	  {
	    table_main.fnClearTable();      
	    for(var i = 0; i < s.length; i++) 
	    { 
	    	var enability; //for property of enabled/disabled
	    	if(s[i][3]=='active'){enability='enabled;'} else{enability='disabled';} //set enability value
	      table_main.fnAddData
	      ([
	        s[i][0],s[i][1],s[i][2],s[i][3],
	        '<button value="'+s[i][0]+'" title="Delete Record" onclick="row_remove(this.value);" class="btn btn-simple btn-danger btn-icon remove" '+enability+'><i class="ti-close"></i></button>',      
	      ],false); 
	      table_main.fnDraw();

	    }       
	  }  
	}); 
	// //ajax end  
} //

function save_f_user(){
	if($('#f_user').valid()==true){ // will save
	$('#btn_save').prop('disabled',true); // disable save button
		var name = $('#f_name').val();
		var usertype = $('#f_usertype').val();
		var username = $('#f_username').val();
		var password = $('#f_password').val();
		var dataString = 'username='+username+'&usertype='+usertype+'&password='+password+'&name='+name;

		//ajax now
		$.ajax ({
		  type: "POST",
		  url: "../../model/user/create.php",
		  data: dataString,
		  // dataType: 'json',      
		  cache: false,
			async: false,		  
		  success: function(x){ 
		  	if(x==0)
				swal('Saved!', 'New User Account Created!','success'); 
			else if(x==1)
				swal('Failed!', 'Something went wrong...','error'); 	
			else if(x==2)
				swal('Already Exist!', 'The User you are trying to create already exist','error'); 							
		  },
		}); 
		//ajax end 
 
		populate_table_main(); //refresh table
		clear_form_user();	
	}
	$('#btn_save').prop('disabled',false); // enable save button	
	return false;
}

function clear_form_user(){
	$('#f_username').val(''); $('#f_name').val();
	$('#f_password').val('');
}

function row_remove(id){
	swal({  title: "Confirm Delete?",
    text: "Are you sure you want to delete this user account?",
    type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn btn-info btn-fill",
      confirmButtonText: "Yes, delete it!",
      cancelButtonClass: "btn btn-danger btn-fill",
      closeOnConfirm: false,
  },function(){
  	delete_f_user(id);
  });
}

function delete_f_user(id){
		//ajax now
		$.ajax ({
		  type: "POST",
		  url: "../../model/user/delete.php",
		  data: 'id='+id,
		  // dataType: 'json',      
		  cache: false,
			async: false,		  
		  success: function(x){ swal("Deleted!", "User has been successfully deleted", "success"); },
		  error: function(x){	swal('Failed!', 'Something went wrong...','error');}
		}); 
		//ajax end 	
		populate_table_main();
}

// function btn_edit(id){
// 	alert(id);
// }

