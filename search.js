
function fill(Value) {
   $('#search2').val(Value);
   $('#display').hide();
}
$(document).ready(function() {
   $("#search2").keyup(function() {
       var name = $('#search2').val();
       if (name == "") {
           $("#display").html("");
       }
       else {
           $.ajax({
             
               type: "POST",
               url: "ajax.php",
               data: {
                   search: name
               },
               success: function(html) {
                   $("#display").html(html).show();
               }
           });
       }
   });
});
