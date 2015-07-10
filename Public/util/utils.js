/**
 *	utils模块
 */
define(function(require, exports, module) {

	var _STRING = "string";
	var _EMAIL = "email";
	var _PHONE = "phone";
	var _ISNONE = "none";


	var _alertHandler = function(msg){
		var _alertStr = '<div class="alerts"><i class="fa fa-bell-o fa-fw"></i>'+msg+'</div>';
		$('body').append(_alertStr);
		setInterval(function(){
			$('body').find(".alerts").remove();
		},5000)
	}
	/**
	 * [verifyHandler description]
	 * @param  {[type]} sVal  [description]
	 * @param  {[type]} iType [description]
	 * @return {[type]}       [description]
	 */
	var _verifyHandler = function(sVal, iType) {
		var _isFlag = false;
		switch (iType) {
			case _STRING:

				break;
			case _EMAIL:
				console.log("email")
				break;
			case _ISNONE:
				sVal = $.trim(sVal);
				if (sVal.length > 0) {
					_isFlag = true;
				} else {
					_isFlag = false;
				}
				break;
			default:
				sVal = $.trim(sVal);
				if (sVal.length > 0) {
					_isFlag = true;
				} else {
					_isFlag = false;
				}
				break;
		}
		return _isFlag;
	}

	/**
	 * [_loadingHandler description]
	 * @param  {[type]} bStatus [description]
	 * @return {[type]}         [description]
	 */
	var _loadingHandler = function(bStatus){
		var _str = '<div id="js_utils_loading" class="loading"><p><i class="fa fa-spinner fa-pulse"></i> 正在加载......</p></div>';
		if(arguments[1] != null){
			if(bStatus){
				$(arguments[1]).css("position","relative");
				$(arguments[1]).append(_str);
			}else{
				$(arguments[1]).find(".loading").remove();
			}
		}else{
			if(bStatus){
				$("body").append(_str);
			}else{
				$('body').find(".loading").remove();
			}
		}
	}

	module.exports = {
		verify: _verifyHandler,
		alerts:_alertHandler,
		loader:_loadingHandler,
		STRING: _STRING,
		EMAIL: _EMAIL,
		PHONE: _PHONE,
		ISNONE: _ISNONE
	}
})