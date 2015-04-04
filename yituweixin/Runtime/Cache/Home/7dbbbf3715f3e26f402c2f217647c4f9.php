<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="UTF-8">
<title><?php echo ($initmsg["title"]); ?></title>
    <link rel="stylesheet" type="text/css" href="resources/js/jquery-easyui-1.4.1/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="resources/js/jquery-easyui-1.4.1/themes/icon.css">
    <script type="text/javascript" src="resources/js/jquery-easyui-1.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="resources/js/jquery-easyui-1.4.1/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery-easyui-1.4.1/locale/easyui-lang-zh_CN.js"></script>
    <script type="text/javascript" src="resources/js/jquery-easyui-1.4.1/easyloader.js"></script>

    <script type="text/javascript" src="resources/js/My97DatePicker-7.2/My97DatePicker/WdatePicker.js"></script>
    <script type="text/javascript" src="resources/js/jquery-easyui-portal/jquery.portal.js" charset="UTF-8"></script>
</head>
<body>
<script>
    $(function() {
        $("#left").tree({
            url: '?m=getmsg&a=getmenu',
            onClick: function(node){

                if(node.attributes != "#" && node != ""){
                    Open(node.text, node.id,node.menu_id);
                }
            }
        });

        $("#right").tree({
            url: '?m=system&a=getsitetree',
            onClick: function(node){
                if(node.attributes != "#" && node != ""){
                    Open_right(node.text, node.id);
                }
            }
        });
    });
    //在右边center区域打开菜单，新增tab
    function Open(text, id,menuid) {
        //alert(url);
        var content = createFrame('/?m=getmsg&a=getmenulist&id='+id+"&menu_id="+menuid);
        if ($('#centerTabs').tabs('exists', text)) {
            $('#centerTabs').tabs('select', text);
        } else {
            $('#centerTabs').tabs('add', {
                title : text,
                closable : true,
                content : content
            });
        }
    }
    function Open_right(text, url) {
        //alert(url);
        var temp=url.split('_');
        if(temp[1]==undefined) temp[1]='';
        var content = createFrame('/?m=System&a=getcatindex&id='+url);
        if ($('#centerTabs').tabs('exists', text+temp[1])) {
            $('#centerTabs').tabs('select', text+temp[1]);
        } else {
            $('#centerTabs').tabs('add', {
                title : text+temp[1],
                closable : true,
                content : content
            });
        }
    }
    function createFrame(url) {
        var s = '<iframe scrolling="auto" frameborder="0"  src="' + url
                + '" style="width:100%;height:100%;"></iframe>';
        return s;
    }
</script>
<div class="easyui-layout" style="width:100%;height:100%;background:#e0f4ff">
    <div data-options="region:'north'" style="height:50px"></div>

    <div data-options="region:'east',split:true" title="发布站" style="width:180px;">
        <ul id="right" >

        </ul>
    </div>
    <div data-options="region:'west',split:true" title="抓取站" style="width:180px;">
        <ul id="left" >

        </ul>
    </div>

    <div data-options="region:'center',title:'管理中心',iconCls:'icon-ok'">
        <div id="centerTabs" class="easyui-tabs" data-options="fit:true,border:false">
            <div id="home" title="系统首页" data-options="iconCls:'icon-home',border:false,href:'?m=getmsg&a=getsysmsg'" style="overflow: hidden;">

            </div>
        </div>
    </div>
</div>


</body></html>