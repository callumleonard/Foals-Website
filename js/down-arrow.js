// Javascript on click event, when arrow clicked it takes user to shows section, this is in it's own file as news.html does not use this.
document.getElementById("down-arrow").addEventListener("click", function(){
    $('html, body').animate({
        scrollTop: $('#shows').offset().top
    });
});
