<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($index_msg["title"]); ?></title>

    <link href="/resources/css/page_index.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/global.css" rel="stylesheet" type="text/css" />
    <link href="/css/common.css" rel="stylesheet" type="text/css" />
    <link href="/css/case.css" rel="stylesheet" type="text/css" />
    <link href="/css/text.css" rel="stylesheet" type="text/css" />

</head>
<body id="index">

<div id="box_root" class="pageWidth">
    <!-- 头信息 -->
	<!-- 头部导航开始 -->
<div id="box_header">
    <div class="menu_rim">
        <ul class="menu">
            <li class="nav_home"><a href="/#index_rim" class="en"><b>首页</b></a><a href="#index_rim" class="cn selected">首页</a></li>
            <li class="nav_about"><a href="/#about_rim" class="en"><b>伊融国际</b></a><a href="#about_rim" class="cn">伊融国际</a></li>
            <li class="nav_pro"><a href="/#pro_rim" class="en"><b>核心产业</b></a><a href="#pro_rim" class="cn">核心产业</a></li>
            <li class="nav_news"><a href="/#news_rim" class="en"><b>案例作品</b></a><a href="#news_rim" class="cn">案例作品</a></li>
            <li class="nav_join"><a href="/#join_rim" class="en"><b>资讯活动</b></a><a href="#join_rim" class="cn">资讯活动</a></li>
            <li class="nav_market"><a href="/#market_rim" class="en"><b>团队组成</b></a><a href="#market_rim" class="cn">团队组成</a></li>
            <li class="nav_contact"><a href="/#contact_rim" class="en"><b>联系方式</b></a><a href="#contact_rim" class="cn">联系方式</a></li>
        </ul>
        <ul class="top_link">
            <li class="luggage"><a href="#">英文版</a></li>
            <li class="weibo"><a href="<?php echo ($index_msg["sina_weibo"]); ?>" target="_blank">微博</a></li>
            <li class="txweibo"><a href="<?php echo ($index_msg["qq_weibo"]); ?>" target="_blank">微博</a></li>
            <li class="weixin"><a href="#">微信</a><img src="#" /></li>
            <li class="phone"><a href="#">二维码</a></li>
            <li class="erwei"><a href="#">二维码</a></li>
        </ul>
    </div>
</div>
<!-- 头部导航结束 -->

    <!-- 一列栏目开始 -->
    <div id="box_main">
        <div id="context">
            <div id="top">
                <div id="left">
                    <div class="right_bg" onmouseout="fun1(document.getElementById('show'))">

                                <div class="tx_title2" style="font-family:黑体">案列展示</div>
                        <div class="tx_line"></div>
                        <?php if(is_array($project_list)): foreach($project_list as $key=>$list): ?><div class="tx_li" onmouseover="fun2(document.getElementById('image_<?php echo ($list["id"]); ?>'))"><?php echo ($list["title"]); ?> <span> > </span></div>
                            <div class="tx_line2"></div><?php endforeach; endif; ?>

                    </div>
                </div>
                <div id="right">
                    <div id="top_img"> </div>
                    <div id="show" onmouseout="fun1(this)">

                        <?php if(is_array($project_list)): foreach($project_list as $key=>$list): ?><li id="image_<?php echo ($list["id"]); ?>" onmouseover="fun2(this)">
                                <div class="shortcut nor"> <a href="#"><img src="/images/products/m_<?php echo ($list["image"]); ?>"  border="0"/></a> </div>
                            </li><?php endforeach; endif; ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mask hidden"> </div>
    <script type="text/javascript">
        function fun2(obj)
        {

            var show=document.getElementById('show');

            var locLi=show.getElementsByTagName('li');
            for(var i=0;i<locLi.length;i++){
                var locDiv=locLi[i].getElementsByTagName('Div');
                if(locLi[i]==obj){
                    locDiv[0].className='shortcut on';
                }
                else{
                    locDiv[0].className='shortcut off';
                }
            }
        }

        function fun1(obj)
        {
            var show=document.getElementById('show');

            var locDiv=show.getElementsByTagName('div');
            for(var i=0;i<locDiv.length;i++){
                locDiv[i].className='shortcut nor';
            }
        }
    </script>
    <script>
        window.onload=function(){
            var menu=document.getElementById('menu');

            var locLi=menu.getElementsByTagName('li');
            var locDiv=menu.getElementsByTagName('div');
            for(var i=0;i<locLi.length;i++){
                locLi[i].onmouseover=function(){
                    displayDiv(this,'over');
                    //alert(this);
                }
                locLi[i].onmouseout=function(){
                    displayDiv(this,'out');
                }
            }

        }


    </script>
    </div>
    <!-- 一页脚开始 -->
	<!-- 底部版权开始 -->
<div id="box_footer">
    <div class="columnSpace" >
        <div class="foot_rim">
            <?php echo ($index_msg["company"]); ?>版权所有　<a href="#" target="_blank"><?php echo ($index_msg["beian"]); ?></a>　COPYRIGHT &copy; 2015 WWW.FUS1ON.COM.CN ALL RIGHTS RESERCED.　
        </div>
    </div>


</div>
<!-- 底部版权结束 -->


</div>
</body></html>