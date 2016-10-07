$(".withplaceholder input").bind("change paste keyup", function() {
   if($(this).val() == ''){
       $(this).prev().removeClass("on");
       $(this).prev().animate({opacity:'0'}, 0);
    } else {
       $(this).prev().addClass("on");
       $(this).prev().animate({opacity:'1'}, 0);
    }
});