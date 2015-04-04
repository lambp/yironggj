<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
.t-list {
	padding: 5px
}

.tabs,.tabs li a.tabs-inner,.tabs li.tabs-selected a.tabs-inner {
	border-color: #46bee7
}

.tabs li.tabs-selected a.tabs-inner {
	border-bottom-color: #f6f6f6
}

.tabs li a.tabs-inner {
	background-image: url('resources/img/ww.gif')
}
</style>
<script type="text/javascript">
    var portalLayout;
	$(function(){
		portalLayout = $('#portalLayout').layout({
			fit : true
		});
		$(window).resize(function() {
			portalLayout.layout('panel', 'center').panel('resize', {
				width : 1,
				height : 1
			});
		});
		
		$('#pp').portal({
			border : false,
			fit : true
		});
	});

    function create_url(){



        if($('#site_url').textbox('getValue')==''||$('#site_name').textbox('getValue')==''){
            alert('名称和域名都不能为空！');
            return 0;
        }
        $.messager.progress();
        $.post('?m=getmsg&a=geturls',{url:$('#site_url').textbox('getValue'),'text':$('#site_name').textbox('getValue')},function(data){
            $.messager.show({
                title:'提示',
                msg:data.msg
            });
            $.messager.progress('close');
        },'json');
    }
    function getall_url(){

        if($('#web_url').textbox('getValue')==''||$('#web_name').textbox('getValue')==''){
            alert('名称和域名都不能为空！');
            return 0;
        }
        $.messager.progress();
        $.post('?m=getmsg&a=getall_url',{url:$('#web_url').textbox('getValue'),'text':$('#web_name').textbox('getValue')},function(data){
            $.messager.show({
                title:'提示',
                msg:data.msg
            });
            $.messager.progress('close');
        },'json');
    }

    function create_size(){
        if($('#wurl').textbox('getValue')==''||$('#wname').textbox('getValue')==''){
            alert('名称和域名都不能为空！');
            return 0;
        }
        $.messager.progress();
        $.post('?m=getmsg&a=createsize',{url:$('#wurl').textbox('getValue'),'text':$('#wname').textbox('getValue')},function(data){
            $.messager.show({
                title:'提示',
                msg:data.msg
            });
            $.messager.progress('close');
        },'json');
    }

    function update_preg(){
        var id=($('#sites').combobox('getValue'));
        var decs = $("#decs_preg").val();
        var msg = $("#msg_preg").val();
       if(id>0){
           $.messager.progress();
           $.post('?m=getmsg&a=update_site_preg',{id:id,decs:decs,msg:msg},function(data){
               $.messager.show({
                   title:'提示',
                   msg:data.msg
               });

               $.messager.progress('close');

           },'json');
       }else{
           $.messager.show({
               title:'提示',
               msg:'选择要修改的网站！'
           });
       }

    }

    $('#sites').combobox({
        onSelect: function(res){
                $('#decs_preg').textbox('setValue',res.dece_search);
                $('#msg_preg').textbox('setValue',res.detail_search);
        }
    });
</script>
<div id="portalLayout">
	<div data-options="region:'center',border:false">
		<div id="pp"
			style="position: relative; background: url('resources/img/bbj.jpg') right bottom no-repeat">
			<div style="width: 50%;">
                <div
                        data-options="title:'添加新网站',collapsible:true,closable:true,iconCls:'icon-group'"
                        style="height: 200px; padding: 5px;">
                    <div class="t-list">网站名称：<input type="text" id="site_name" class="easyui-textbox" style="width: 150px"> </div>
                    <div class="t-list">网站域名：<input type="text" id="site_url" class="easyui-textbox" style="width: 150px">不要带www</div>
                    <div class="t-list"><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="create_url()">创建</a></div>
                </div>
                <div data-options="title:'修改抓取规则',collapsible:true,closable:true"
                     style="height: 200px; padding: 5px;">
                    <input id="sites" class="easyui-combobox" name="dept"
                           data-options="valueField:'id',textField:'text',url:'?m=getmsg&a=sites'">
                    <div class="t-list">描述正则：<input type="text" id="decs_preg" class="easyui-textbox" style="width: 330px">
                       <div> (默认规则:'/前面的内容content="(.*?)">/i')</div>
                    </div>
                    <div class="t-list">内容正则：<input type="text" id="msg_preg" class="easyui-textbox" style="width: 330px">
                        <div>内容正则:(默认规则:'/前面的内容([\s\S]*)后面的内容/i')</div>
                    </div>
                    <div class="t-list"><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="update_preg()">修改</a></div>

                </div>
			</div>
			<div style="width: 50%;">

                <div
                        data-options="title:'抓全站',collapsible:true,closable:true,iconCls:'icon-group'"
                        style="height: 200px; padding: 5px;">
                    <div class="t-list">网站名称：<input type="text" id="web_name" class="easyui-textbox" style="width: 150px"> </div>
                    <div class="t-list">网站域名：<input type="text" id="web_url" class="easyui-textbox" style="width: 150px">不要带www</div>
                    <div class="t-list"><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="getall_url()">创建</a></div>
                </div>
				<div data-options="title:'创建抓取网站数据库',collapsible:true,closable:true"
					style="height: 200px; padding: 5px;">
                    <div class="t-list">网站名称：<input type="text" id="wname" class="easyui-textbox" style="width: 150px"> </div>
                    <div class="t-list">网站域名：<input type="text" id="wurl" class="easyui-textbox" style="width: 150px">不要带www</div>
                    <div class="t-list"><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="create_size()">创建</a></div>

                </div>
			</div>
            <div style="width: 50%;">

                <div
                        data-options="title:'添加分类',collapsible:true,closable:true,iconCls:'icon-group'"
                        style="height: 200px; padding: 5px;">
                    <input id="wsite" class="easyui-combobox" name="dept"
                           data-options="valueField:'id',textField:'text',url:'?m=getmsg&a=sites'">

                    <div class="t-list">所属分类：
                    </div>
                    <div class="t-list">内容正则：
                    </div>
                    <div class="t-list"><a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" onclick="update_preg()">修改</a></div>

                </div>

            </div>
		</div>
	</div>
</div>