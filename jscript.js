$(document).ready(function(){
    $("#entry_button").fadeIn(2100);
    $("#display_button").fadeIn(2900);

    
    $("#display_button").click(function(){
        window.location.href = "search.html";
    });
    
    $("#search").click(function(){
        $("#search").attr("value", "");
    });
    
    $("#entry_button").click(function(){
       window.location.href = "entry.html"; 
    });
    
    
    $(".return_button").click(function(){
       window.location.href = "entry.html"; 
    });
    
    $(".clear_button").click(function(){
        $('input[type="text"]').val('');
    });
    
    
});