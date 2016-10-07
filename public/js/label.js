/*!
 * Label v1.0, https://github.com/brendenpalmer/label/tree/1.x
 * ===================================
 * Label is a simple jQuery plugin that adds labels for easy HTML5 markup
 *
 * Copyright (c) 2015 Brenden Palmer, http://www.brendenpalmer.com
 * MIT Licensed
 */

;(function( $ ) {
 
    $.fn.label = function(options) {
 		'use strict';
        var settings = $.extend({
            // These are the defaults.
            mode: 'default', //default OR placeholder OR inline
            color: '#666',
            parentClass: 'input-parent',
            labelClass: 'label',
            fontSize: '0.9rem',
            alignText: 'left', //left, center, or right
            show: 'default' //default, keyup, focus
        }, options );
 		
 		function Label(input){
 			this.input = input;
 			this.init();
 		}
 		
 		Label.prototype.wrapInput = function(){
 			var $input = $(this.input);
 			$input.wrap('<div class="'+settings.parentClass+'" style="position:relative;"></div>');
 		};
 		
 		Label.prototype.createLabel = function(){
 			var $input = $(this.input), label;
 			switch (settings.mode){
 				case 'placeholder':
 					if ($input.val().length > 0)
						label = '<label class="placeholder-label show"';
					else
						label = '<label class="placeholder-label"';
					label = label + ' style="font-size:'+$input.css('font-size')+';color:'+settings.color+';';
					label = label + 'text-align:'+settings.alignText+';"';
					label = label + '>'+$input.data('label');+'</label>';
					break;
				case 'inline':
					label = '<label class="'+settings.labelClass+' inline"';
					label = label + ' style="color:'+settings.color+';text-align:'+settings.alignText+';"';
					label = label + '>'+$input.data('label');+'</label>';
					break;
				default:
 					label = '<label class="'+settings.labelClass+'"';
					label = label + ' style="color:'+settings.color+';text-align:'+settings.alignText+';"';
					label = label + '>'+$input.data('label');+'</label>';
					break;
 			}
			return label;
 		};
 		
 		Label.prototype.showLabel = function(){
 			var $input = $(this.input);
 			switch (settings.show){
 				case 'focus':
 					$input.focus(function(){
						$input.parent().find('label').addClass('show').css('font-size',settings.fontSize);
					});
					break;
				case 'keyup':
					$input.keyup(function(){
						if ($input.val().length > 0)
							$input.parent().find('label').addClass('show').css('font-size',settings.fontSize);;
					});
					break;
				default:
					if (settings.mode === 'placeholder'){
						$input.focus(function(){
							$input.parent().find('label').addClass('show');
						});
					} else {
						$input.parent().find('label').addClass('show').css('font-size',settings.fontSize);
					}
 					break;
 			}
 		};
 		
 		Label.prototype.init = function(){
 			var $input = $(this.input);
 			if ($input.data('label') !== undefined && $input.data('label').length > 0){
				this.wrapInput();
				$input.parent().prepend(this.createLabel());
				this.showLabel();
 			}
 		};
 		
 		if (settings.mode === 'placeholder'){
 			$(document).on('click', '.placeholder-label', function(e){
 				e.preventDefault();
 				$(this).next().focus();
 			});
 		}
 		
 		return this.each(function(){
 			var label = new Label(this);
 		});
 		
    };
 
}( jQuery ));