(function( $ ) {
    $.fn.placeHolder = function() {
		$('.place-holder').each(function(){
			var value = $(this).attr('place-holder');
			
			$(this).wrap('<div class="float-text"></div>').parent().prepend('<label class="place-holder-label">'+value+'</label>');
			
			$(this).parent().bind('click', function(){
				$(this).removeClass('float-text');
				$(this).addClass('float-text-focused');
				$(this).find('> label').animate({
					fontSize: "12px"
				}, 400);
				var textInput = $(this).find('> input');
				textInput.focus();
				textInput.width("350px");
				textInput.height("18px");
				textInput.css({"margin-left":"5px", "color":"gray"});
				textInput.bind('blur', function(){
					var val = $(this).val();
					if(val == null || val == undefined || val == ''){
						$(this).width("0px");
						$(this).height("0px");
						var divParent = $(this).parent();
						divParent.removeClass('float-text-focused');
						divParent.addClass('float-text');
						divParent.find('> label').animate({
							fontSize: "18px"
						}, 400);
					}
				})
			})
		});
    };
}(jQuery));

