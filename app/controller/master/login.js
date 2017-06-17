
function validate_login(){



  var username = $('#f_username').val();
  var password = $('#f_password').val();
  var dataString = 'username='+username+'&password='+password;

  // ajax now
  $.ajax ({
    type: "POST",
    url: '../../model/master/validate_login.php',
    data: dataString,
    dataType: 'json',      
    cache: false,
    success: function(s){  
      if(s=='true'){   
        $('#btn_login').removeClass('btn-primary');
        $('#btn_login').removeClass('btn-danger');        
        $('#btn_login').addClass('btn-success');
        $('#btn_login').text('LOGGED-IN');
        setTimeout(' window.location="../../../index.php"', 300); 
      }
      else if(s=='false'){
        $('#f_username').val(''); $('#f_password').val('');
        $('#btn_login').removeClass('btn-primary');
        $('#btn_login').addClass('btn-danger');
      }
    }  
  }); 
  // //ajax end     


  return false;
}
