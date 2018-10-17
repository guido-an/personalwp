$ = jQuery.noConflict();

// From mobile show menu when click on burger icon
$("#mobile-menu").click( function() {
  $("#menu").toggle('slow');
})

// Show submenu - only relative child elements
$(document).ready(function(){
    $("li").has("ul li").click(function(){
        $(this).find("ul").toggle('slow')
    })
})

// Show submenu - only relative child elements
$(document).ready(function(){
    $("li li").has("ul li").click(function(){
        $(this).css("display:grid !important;").find("ul").toggle('slow')
    })
})


// Add .arrow class to parent menu items
$('li').has('ul').children('a').append('<span class="arrow">></span>');
