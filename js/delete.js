$(document).ready(function(){
    //targeting the deletedata button, when it is clicked trigger event handler function, prompting the user to confirm their choice of deleting their info.
    //sending the confirm response to the handler, handler then attempts to perform the deletion, based on the "response" back display relevant text if == 1(true) trigger timer and return user to index.php
    $("#deleteData").on('click',function(e){
      e.preventDefault();
      if(!confirm("Are you sure you wish to delete all of your data?")) return false;
      $.post("php-includes/delete-handler.php",{action:"deleteuser"},function(response){
        console.log(response);
        if(response == "1"){
          $(".delete-response").text("Data deleted successfully, logging out.").addClass("text-success");
          setTimeout(function(){
            window.location.href = "index.php";
          },4000);  
        }else{
          $(".delete-response").text("Something went wrong.").addClass("text-danger");
        }
      })
    });
})

