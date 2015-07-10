/**
 *	index模块
 */
define(function(require, exports, module) {

	var utils = require("../util/utils");
	var config = require("../util/config");
	var common = require("../util/common");

	var _getThemeListHandler = function(){
		utils.loader(true,$(".list-content"));
		$.ajax({
			url:config.SDK_URL+ "getCategroyListByParent",
			data:{parent:$("#js_title").data("parentid")},
			type:"GET",
			success:function(result){
				console.log(result);
				if(result.code  != 0){
					$("#js_theme_list").empty();
					var htmlStr = '';
					for (var i = 0; i < result.data.length; i++) {
						var item = result.data[i];
						htmlStr += '<li class="category-item" data-id="'+item.id+'">'+item.name+'</li>'
					};
					utils.loader(false,$(".list-content"));
					$("#js_theme_list").append(htmlStr);					


				}else{
					utils.alert(result.msg);
				}
			}
		})
	}

	var _setCategoryNameHandler = function(o){
		
	}

	var _initPageHandler = function(){
		_getThemeListHandler();
	}



	exports.init = function(module) {
		_initPageHandler();
		$("#js_add_category_btn").click(function(){
			var categoryName = $("#js_category_name").val();
			if(categoryName == ""){
				utils.alert("主题名称不能为空");
				return false;
			}
			var parents = $("#js_title").data("parentid");
			var obj = {
				name:categoryName,
				parentid:parents
			}
			_setCategoryNameHandler(obj);
		})
	}
})