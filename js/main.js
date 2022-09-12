//Onclick burger bar that expands to provide a mobile menu based on current screensize
$(document).ready(function(){
    $('#burger').on('click',function()
    {
      //declaring local variables as opposed to global
      let burger = $(this);
      $('#mobile-nav').slideToggle();
      if(burger.text()=="☰")
      {
        burger.html("X")
      }
      else
      {
        burger.html("☰")
      }
    })

    if(window.location.hash) 
    {
        var hash = window.location.hash;
        $('html, body').animate(
          {
            scrollTop: $(hash).offset().top
          });
    } 

    // Initalizes the nice scroll Jquery plugin
    $("body").niceScroll();

    //Jquery onclick that enables the open and close box containing album information for each album
    $(document).ready(function(){
      $(".openclose1").click(function(){
      var check=$(".openclose1").text().trim();
      if(check=="Close"){
       $(".openclose1").text("MORE INFO");
       $("#btncontent1").addClass("d-none");
       }else{
       $(".openclose1").text("Close");
       $("#btncontent1").removeClass("d-none");
       }
       });
       });

    $(document).ready(function(){
    $(".openclose2").click(function(){
    var check=$(".openclose2").text().trim();
    if(check=="Close"){
      $(".openclose2").text("MORE INFO");
      $("#btncontent2").addClass("d-none");
      }else{
      $(".openclose2").text("Close");
      $("#btncontent2").removeClass("d-none");
      }
      });
      });

    $(document).ready(function(){
    $(".openclose3").click(function(){
    var check=$(".openclose3").text().trim();
    if(check=="Close"){
      $(".openclose3").text("MORE INFO");
      $("#btncontent3").addClass("d-none");
      }else{
      $(".openclose3").text("Close");
      $("#btncontent3").removeClass("d-none");
      }
      });
      });

    $(document).ready(function(){
    $(".openclose4").click(function(){
    var check=$(".openclose4").text().trim();
    if(check=="Close"){
      $(".openclose4").text("MORE INFO");
      $("#btncontent4").addClass("d-none");
      }else{
      $(".openclose4").text("Close");
      $("#btncontent4").removeClass("d-none");
      }
      });
      });

    $(document).ready(function(){
    $(".openclose5").click(function(){
    var check=$(".openclose5").text().trim();
    if(check=="Close"){
      $(".openclose5").text("MORE INFO");
      $("#btncontent5").addClass("d-none");
      }else{
      $(".openclose5").text("Close");
      $("#btncontent5").removeClass("d-none");
      }
      });
      });

    $(document).ready(function(){
    $(".openclose6").click(function(){
    var check=$(".openclose6").text().trim();
    if(check=="Close"){
      $(".openclose6").text("MORE INFO");
      $("#btncontent6").addClass("d-none");
      }else{
      $(".openclose6").text("Close");
      $("#btncontent6").removeClass("d-none");
      }
      });
      });

    $(document).ready(function(){
      $(".openclose7").click(function(){
      var check=$(".openclose7").text().trim();
      if(check=="Close"){
        $(".openclose7").text("MORE INFO");
        $("#btncontent7").addClass("d-none");
        }else{
        $(".openclose7").text("Close");
        $("#btncontent7").removeClass("d-none");
        }
        });
        });

    $(document).ready(function(){
      $(".openclose8").click(function(){
      var check=$(".openclose8").text().trim();
      if(check=="Close"){
        $(".openclose8").text("MORE INFO");
        $("#btncontent8").addClass("d-none");
        }else{
        $(".openclose8").text("Close");
        $("#btncontent8").removeClass("d-none");
        }
        });
        });
      
      //album onclick end---------------

    //Uses the cookie consent 
    window.cookieconsent.initialise({
        "palette": {
          "popup": {
            "background": "#000000",
            "text": "#FFFFFF"
          },
          "button": {
            "background": "#dda11d",
          }
        }
      });
})
