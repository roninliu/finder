/**
 *	common
 */
define(function(require, exports, module) {

	var _initSizeHandler = function() {
		_setSizeHandler();
		$(window).resize(function() {
			_setSizeHandler();
		})
	}

	var _setSizeHandler = function() {
		var container = $("#js_container")
		var winSize = $(window).height();
		if (winSize < 400) {
			container.css({
				"min-height": "400px"
			});
		} else {
			var stamt = winSize - 121;
			container.css({
				"min-height": stamt
			});
		}
	}



	module.exports = {
		init: _initSizeHandler
	}
})