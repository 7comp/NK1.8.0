﻿(function(){CKEDITOR.dialog.add('dailymotion',
	function(editor)
	{return{title:editor.lang.dailymotion.title,minWidth:CKEDITOR.env.ie&&CKEDITOR.env.quirks?368:350,minHeight:240,
	onShow:function(){this.getContentElement('general','content').getInputElement().setValue('')},
	onOk:function(){
					val = this.getContentElement('general','content').getInputElement().getValue();
					var text='<object width="480" height="390"><param name="movie" value="http://www.dailymotion.com/swf/video/'
					+ val
					+'"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.dailymotion.com/swf/video/'
					+ val
					+'" type="application/x-shockwave-flash" width="480" height="390" allowscriptaccess="always" allowfullscreen="true"></embed></object>';
	this.getParentEditor().insertHtml(text)},
	contents:[{label:editor.lang.common.generalTab,id:'general',elements:
																		[{type:'html',id:'pasteMsg',html:'<div style="white-space:normal;width:500px;"><div style="margin:auto;width:280px"><img src="'
																		+CKEDITOR.getUrl(CKEDITOR.plugins.getPath('dailymotion')
																		+'images/dailymotion_large.jpg')
																		+'"></div><br />'+editor.lang.dailymotion.pasteMsg
																		+' - ( ex. : http://www.dailymotion.com/swf/video/<div style="font-weight: bold; display: inline">xjc80p</div> )</div>'},{type:'html',id:'content',style:'width:340px;height:90px',html:'<input size="10" style="'+'border:1px solid gray;'+'background:white">',focus:function(){this.getElement().focus()}}]}]}})})();