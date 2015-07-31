/**
 *	index模块
 */
define(function(require, exports, module) {

	var utils = require("../util/utils");
	var config = require("../util/config");
	var common = require("../util/common");

	var _lineTable = null;

	var _initLineTableHandler =function(){
		_lineTable = $("#js_linesList").dataTable({
			"bProcessing": true,
			"bServerSide": true,
			"bDestroy": true,
			"bFilter": false,
			"bSort": true,
			"bLengthChange": false,
			"bInfo": true,
			"iDisplayLength": 15,
			"oLanguage": {
				"sProcessing": "<i class='fa fa-spinner fa-pulse'></i> 努力加载数据中...",
				"sLengthMenu": "每页显示 _MENU_ 条记录",
				"sZeroRecords": "抱歉， 没有检索到数据",
				"sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
				"sInfoEmpty": "没有数据",
				"sInfoFiltered": "(从 _MAX_ 条数据中检索)",
				"oPaginate": {
					"sFirst": "首页",
					"sPrevious": "前一页",
					"sNext": "后一页",
					"sLast": "尾页"
				},
				"sSearch": "搜索："
			},
			"fnServerParams": function(aoData) {
				aoData.push({
					name: "type",
					value: $("#js_themeId").val()
				});
				aoData.push({
					name:"iSortCol_0",
					value:0
				});
				aoData.push({
					name:"keyword",
					value:$("#js_key").val(),
				})
			},
			"fnServerData": function(sSource, aDataSet, fnCallback) {
				$.ajax({
					"type":"POST",
					"url": sSource,
					"data": aDataSet,
					"success": function(resp) {
						console.log(resp);
						if (resp.code == 0) {
							fnCallback(resp.data);
						}
					}
				});
			},
			"sZeroRecords": "没有检索到数据",
			"sAjaxSource": config.SDK_URL+ "getLinesByType",
			"columns": [{
				"data":"id",
				"bVisible":false
			},
			{
				"data": "title",
			}, {
				"data": "theme",
			}, {
				"data": "start",
			}, {
				"data": "end",
			}, {
				"data": "distance",
			}, {
				"data": "places",
			}, {
				"data": "leader",
			}, {
				"data": "price",
			}, {
				"data": "id",
				'bSortable': false,
			}],
			"columnDefs": [{
				"targets":"title",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"theme",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"start",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"end",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"distance",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"places",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"leader",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"price",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			},{
				"targets":"id",
				"render": function(data,type,row) {
					var htmlStr = "<a href='' class='link'>" + data+ "</a>"
					return htmlStr;
				}
			}],
		});
	}


	var _initLinesHandler = function(){
		
		_initLineTableHandler();
		$("#js_search_btn").click(function(){
			_lineTable.fnClearTable();
		})
	}

	
	var _initAddLinesHandler = function(){
		CKEDITOR.replace( 'js_editor' );
	}

	exports.init = function(module) {
		switch (module) {
			case 0:
				_initLinesHandler();
			break;
			case 1:
				_initAddLinesHandler();
			break;
		}
	}
})