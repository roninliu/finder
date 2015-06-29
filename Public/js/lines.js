/**
 *	index模块
 */
define(function(require, exports, module) {

	var utils = require("../util/utils");
	var config = require("../util/config");
	var common = require("../util/common");

	var _initDataHandler = function(){
		$("#js_linesList").dataTable()
	}

	exports.init = function() {
		common.init();
		_initDataHandler();
		
	}
})