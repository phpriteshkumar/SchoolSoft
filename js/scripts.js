jQuery(function($) {
    $("#schoolregistration").validate({
        submitHandler: function(form) {
            return false;
        }
    });
    $("#validateOTP").validate({
        submitHandler: function(form) {
            return false;
        }
    });
    
    $("#studentsearch").validate({
        submitHandler: function(form) {
            return false;
        }
    });
    
   // $("#login").validate({
//        submitHandler: function(form) {
//           // return false;
//        }
   // });
});