<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($index_msg["title"]); ?></title>
    <link href="/resources/css/lib.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/page_index.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/global.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/resources/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/resources/js/scolljs.js"></script>
    <script type="application/javascript">

        $(document).ready(function(){
            $(".menu li").hover(function(){
                $(this).children("a.cn").stop().animate({top:"0px"}, 200);
            },function(){
                $(this).children("a.cn").stop().animate({top:"60px"}, 200);
            });

            $(".about_li li a").click(function(){
                $(".about_content").animate({top:"0px"}, 400);
            });


            $(".about_content .close_rim a").click(function(){
                $(".about_content").animate({top:"-1100px"}, 400);
            });

            $("li.join_us a").click(function(){
                $(".join_cont").animate({bottom:"0px"}, 400);
            });

            $(".join_cont .close_rim a").click(function(){
                $(".join_cont").animate({bottom:"-1100px"}, 400);
            });

            $("li.shop_show a").click(function(){
                $(".pageWidth").fadeOut(300);
            });

            $(".pro_li li a").hover(function(){
                $(this).children("img").stop().animate({bottom:"0px"}, 300);
            },function(){
                $(this).children("img").stop().animate({bottom:"-60px"}, 300);
            });
            $(".pro_li li a").click(function(){
                $(".pageWidth").fadeOut(300);
            });

            $(".pro_li_exp li a").hover(function(){
                $(this).children("img").stop().animate({bottom:"0px"}, 300);
            },function(){
                $(this).children("img").stop().animate({bottom:"-60px"}, 300);
            });

            $(".pro_li_exp li a").click(function(){
                $(".pageWidth").fadeOut(300);
            });
            $(".market_cont a.show_market").click(function(){
                $(".market_sub").fadeIn(300);
                $(this).animate({bottom:"-60px"}, 300);
            });

            $(".market_sub a.close_market").click(function(){
                $(".market_sub").fadeOut(300);
                $(".market_cont a.show_market").animate({bottom:"350px"}, 300);
            });

            $("li.weixin").hover(function(){
                $(this).children("img").stop().fadeIn(300);
            },function(){
                $(this).children("img").stop().fadeOut(300);
            });

            $("li.phone").hover(function(){
                $(this).children("img").stop().fadeIn(300);
            },function(){
                $(this).children("img").stop().fadeOut(300);
            });

        })

        $(function(){
            //  $("#a111").scrollTo(600,2横向)
            $(".menu").scrollTo(1100)
        });

        $(window).scroll(function () {

            if ($(document).scrollTop() > 1000) {
                $('.menu li.nav_home a.cn').removeClass('selected');

            } else {
                $('.menu li.nav_home a.cn').addClass('selected');
            }


            if ($(document).scrollTop() > 1000) {
                $('.menu li a.cn').removeClass('selected');
                $('.menu li.nav_about a.cn').addClass('selected');

            } else {
                $('.menu li.nav_about a.cn').removeClass('selected');

            }

            if ($(document).scrollTop() > 2100) {
                $('.menu li a.cn').removeClass('selected');
                $('.menu li.nav_pro a.cn').addClass('selected');

            } else {
                $('.menu li.nav_pro a.cn').removeClass('selected');

            }

            if ($(document).scrollTop() > 3200) {
                $('.menu li a.cn').removeClass('selected');
                $('.menu li.nav_news a.cn').addClass('selected');

            } else {
                $('.menu li.nav_news a.cn').removeClass('selected');

            }

            if ($(document).scrollTop() > 4300) {
                $('.menu li a.cn').removeClass('selected');
                $('.menu li.nav_join a.cn').addClass('selected');

            } else {
                $('.menu li.nav_join a.cn').removeClass('selected');

            }

            if ($(document).scrollTop() > 5400) {
                $('.menu li a.cn').removeClass('selected');
                $('.menu li.nav_market a.cn').addClass('selected');

            } else {
                $('.menu li.nav_market a.cn').removeClass('selected');

            }

            if ($(document).scrollTop() > 6000) {
                $('.menu li a.cn').removeClass('selected');
                $('.menu li.nav_contact a.cn').addClass('selected');

            } else {
                $('.menu li.nav_contact a.cn').removeClass('selected');

            }
        });
    </script>

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
        <!-- 主页 -->
        <div class="pub_rims" id="index_rim">
            <img src="/resources/img/index_txt.png" />
        </div>
        <!-- 关于我们 -->
        <div class="pub_rims" id="about_rim">
            <div class="about_content">
                <div class="about_frame">
                    <iframe allowtransparency="true" frameborder="0" height="550" name="about" marginheight="0" marginwidth="0" scrolling="no" src="/loading.html" width="940"></iframe>
                </div>
                <div class="close_rim">
                    <a href="/loading.html" target="about">关闭</a>
                </div>
            </div>
            <div class="about_bg">
                <div class="about_li">

                    <ul>
                        <li class="about_li_01"><a href="/?a=about&about_id=1" target="about"></a></li>
                        <li class="about_li_02"><a href="/?a=about&about_id=2" target="about"></a></li>
                        <li class="about_li_03"><a href="/?a=about&about_id=3" target="about"></a></li>
                    </ul>

                </div>
            </div>
        </div>

        <!-- 核心产业 -->
        <div class="pub_rims" id="pro_rim">

            <div class="pro_li">
                <ul>
                    <li class="pro_li_01"><a href="/?a=products_list&list_id=1"><img src="/resources/img/pro_li_01_txt.png" /></a></li>
                    <li class="pro_li_02"><a href="/?a=products_list&list_id=1"><img src="/resources/img/pro_li_02_txt.png" /></a></li>
                    <li class="pro_li_03"><a href="/?a=products_list&list_id=1"><img src="/resources/img/pro_li_03_txt.png" /></a></li>
                    <li class="pro_li_04"><a href="/?a=products_list&list_id=1"><img src="/resources/img/pro_li_04_txt.png" /></a></li>
                </ul>
            </div>
        </div>
        <!-- 案例作品 -->
        <div class="pub_rims" id="news_rim">

            <div class="pro_li_exp">
                <ul>
                    <li class="pro_li_exp_01"><a href="/?a=project&list_id=1"><img src="/resources/img/pro_li_exp_txt_01.gif" /></a></li>
                    <li class="pro_li_exp_02"><a href="/?a=project&list_id=2"><img src="/resources/img/pro_li_exp_txt_02.gif" /></a></li>
                    <li class="pro_li_exp_03"><a href="/?a=project&list_id=3"><img src="/resources/img/pro_li_exp_txt_03.gif" /></a></li>

                </ul>
            </div>

        </div>
        <!-- 资讯活动 -->
        <div class="pub_rims" id="join_rim">
            <iframe allowtransparency="true" frameborder="0" height="1100" name="news_list" marginheight="0" marginwidth="0" scrolling="no" src="/?a=news_list" width="100%"></iframe>
        </div>

        <!-- 团队组成 -->
        <div class="pub_rims" id="market_rim">

            <iframe allowtransparency="true" frameborder="0" height="1100" name="group_list" marginheight="0" marginwidth="0" scrolling="no" src="/?a=group_list" width="100%"></iframe>
        </div>

        <!-- 联系方式 -->
        <div class="pub_rims" id="contact_rim">
            <div class="contact_box">
                <div id="box_msg">
                    <iframe allowtransparency="true" frameborder="0" height="400" name="about" marginheight="0" marginwidth="0" scrolling="no" src="/?a=messages" width="529"></iframe>
                </div>
                <div id="box_contact">
                    <div class="columnSpace" id="elem-FrontSpecifies_show01-1392101071679" name="说明页"><!-- 装饰器样式开始 -->
                        <div class="border_00">
                            <div class="border_00-topr">
                                <div class="border_00-topl">
                                </div>
                            </div>
                            <div class="border_00-mid">
                                <div class="borderContent"><div id="FrontSpecifies_show01-1392101071679" class="FrontSpecifies_show01-d3_c1"><div class="comptitle_00"><strong class="titlestyle_00"><img src="/resources/img/contact_title.png" /></strong></div><div class="describe htmledit">
                                    <p>
                                        地址：中国 上海 徐汇区 宜山路436号<br />
                                        电话：+86-021-60482641<br />
                                        传真：+86-021-60482641<br />
                                        邮箱：<a href="mailto:yirong@163.com">yirong@163.com</a></p>
                                    <p>
                                        <img alt="" src="/resources/img/address_map.gif" /></p></div>
                                </div>
                                    <div class="clearBoth"></div>
                                </div>
                            </div>
                        </div>
                        <!-- 装饰器样式结束 -->
                    </div>
                </div>
                <div class="contact_bg"></div>
            </div>

            <div class="contact_txt"></div>
        </div>
        </div>
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