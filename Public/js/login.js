/**
 *	index模块
 */
define(function(require, exports, module) {

	var utils = require("../util/utils");
	var config = require("../util/config");

	var _toLoginHandler = function(oData){
		$.ajax({
			url:config.SDK_URL+"doLogin",
			type:"POST",
			data:{
				username:oData.user,
				password:oData.password
			},
			success:function(result){
				console.log(result);
				if(result.code ==1003 ){
					location.href = config.BASE_URL;
				}
			}
		})
	}


	var _loginHandler = function(target) {
		var username = $("#js_username");
		var password = $("#js_password");
		if (utils.verify(username.val(), utils.ISNONE) && utils.verify(password.val(), utils.ISNONE)) {
			var user = {
				user: username.val(),
				password: password.val()
			}
			_toLoginHandler(user);
		} else {
			utils.alerts("用户名和密码不能为空！")
		}
	}

	exports.init = function() {
		$("#js_login").click(function() {
			_loginHandler(this);
		})
	}
})