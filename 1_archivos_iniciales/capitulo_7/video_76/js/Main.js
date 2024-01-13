$(window).resize(function(){
    if($(window).width() > 520){
        $("main").append($("aside"));
    }else{
        $("main").prepend($("aside"));
    }
});