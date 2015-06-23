/**
 *	utils模块
 */
define(function(require, exports, module) {

	var _STRING = "string";
	var _EMAIL = "email";
	var _PHONE = "phone";
	var _ISNONE = "none";


	var _alertHandler = function(msg){
		console.log(msg);
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


	module.exports = {
		verify: _verifyHandler,
		alerts:_alertHandler,
		STRING: _STRING,
		EMAIL: _EMAIL,
		PHONE: _PHONE,
		ISNONE: _ISNONE
	}
})