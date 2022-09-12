//using the jquery ajax function to target the button submit and then changing the content of the div #message.
//the updated text is pulled from the server
$(document).ready(function() {
    $("#submit").click(function(){
        $.ajax({
            type:"GET",
            url:"terms.php",
            success:function(result)
            {
                $("#view_terms").html(result);
            },
            error:function (error) {
                $("#view_terms").html(error);
            }
        })
    });
    
});

//hides the button when terms of service is clicked
$('button[name=terms]')
.click(
     function ()
     {
         $(this).hide();
     }
);