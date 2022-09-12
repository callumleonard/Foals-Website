//jquery to highlight the selected class (ptag) when mouse is hovered over it.
//when the mouse is moved elsewhere return it to black
$(document).ready(function(){
	$(".pidgey-colour").mouseover(function(){
	  $(".pidgey-colour").css("background-color", "darkblue");
	});
	$(".pidgey-colour").mouseout(function(){
	  $(".pidgey-colour").css("background-color", "black");
	});
  });