
$(document).ready(function(){
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });

    $('.datetimepicker').datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
     });

     $('.datepicker').datetimepicker({
        format: 'MM/DD/YYYY',    //use this format if you want the 12hours timpiecker with AM/PM toggle
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove',
        }
     });

     $('.timepicker').datetimepicker({
//          format: 'H:mm',    // use this format if you want the 24hours timepicker
        format: 'h:mm A',    //use this format if you want the 12hours timpiecker with AM/PM toggle
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }

     });

});




var misc = {

  logout: function(){
    swal({
      title: "Log-Out?",
      text: "Are you sure you want to Log-Out?",
      type: "warning",
      showCancelButton: true,
        confirmButtonClass: "btn btn-info btn-fill",
      confirmButtonText: "Yes, Log-Out",
      cancelButtonText: "No, Cancel",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {

        // ajax now
        $.ajax ({
          type: "POST",
          url: '../../model/master/logout.php',
          dataType: 'json',
          cache: false,
          success: function(s){
          }
        });
        // //ajax end
        setTimeout(' window.location="../../view/master/login.php"', 0);


      } else {
        swal("Cancelled", "You're still in your session", "warning");
      }
    });



  },

  comma: function(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  },

  uncomma: function(x) {
    var string1 = x;
    for (y = 0; y < 12; y++) {
      string1 = string1.replace(/\,/g, '');
    }
    return string1;
  }

}

var menu_settings = {

  page_name: function(get){
    $('#page_name').text(get);
  },

  menu_name: function(get){
    $('#menu_'+get).addClass('active');
  },

  menu_name2: function(parent,child){
    $('#'+parent).addClass('collapse in');
    $('#menu_'+parent).addClass('active');
    $('#menu_'+child).addClass('active');
  }
}
