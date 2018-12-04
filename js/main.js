window.onload = function(){

$('.mobileHeader').click(function() {
      $('.menu-main-navigation-container').toggleClass("active");
    });
    
    


};
    
$(document).mouseup(function(e) 
{
    var container = $(".menu-main-navigation-container");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        $('.menu-main-navigation-container').removeClass("active");
    }
});