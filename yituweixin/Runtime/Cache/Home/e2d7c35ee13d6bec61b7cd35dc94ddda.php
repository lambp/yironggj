<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($index_msg["title"]); ?></title>
    <link href="/resources/css/lib.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/page_index.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/page_products_list.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/global.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/page_pro.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/resources/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/resources/js/jquery.lazyload.min.js.js"></script>
    <script type="text/javascript" src="/resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="/resources/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="/resources/js/blocksit.min.js"></script>

    <script type="text/javascript" src="/resources/js/catogory.js"></script>
</head>
<body id="products_list">

    <!-- 头信息 -->
	<!-- 头部导航开始 -->
<div id="box_header">
    <div class="menu_rim">
        <ul class="menu">
        </ul>
        <ul class="top_link">
            <li class="luggage"><a href="#">英文版</a></li>
            <li class="weibo"><a href="#" target="_blank">微博</a></li>
            <li class="txweibo"><a href="#" target="_blank">微博</a></li>
            <li class="phone"><a href="#">二维码</a></li>
            <li class="weixin"><a href="#">微信</a><img src="#" /></li>
        </ul>
    </div>
</div>
<!-- 头部导航结束 -->

    <div id="box_main">
        <!-- 主体内容开始 -->
        <div id="box_left">
            <div class="containerContent">
                <a class="back_pro" href="/">返回首页</a>
                <DIV xmlns="" class="columnSpace" id="elem-FrontProductsCategory_show01-001">
                    <script type="text/javascript">
                        //<![CDATA[
                        FrontProductsCategory_show01['FrontProductsCategory_show01-001_init'] = function() {
                            jQuery("div[class^=FrontProductsCategory_show01-d1] > div.menu-first > ul > li").hover( function() {
                                jQuery("div[class^=FrontProductsCategory_show01-d1] .menu-second").hide();
                                jQuery(this).children("div.menu-second").show();
                                jQuery(this).children("div.menu-second > a.menu-text1").addClass("current");
                            }, function() {
                                jQuery("div[class^=FrontProductsCategory_show01-d1] .menu-second").hide();
                                jQuery(this).children("div.menu-second > a.menu-text1").removeClass("current");
                            });
                        }
                        jQuery(document).ready(FrontProductsCategory_show01['FrontProductsCategory_show01-001_init']);
                        //]]>
                    </script>
                    <div id="FrontProductsCategory_show01-001" class="FrontProductsCategory_show01-d1_c2"><div class="menu-first">
                        <ul>
                            <li class="menu-none">
                                <a href="/?a=products_list&list_id=1" target="_self" class="menu-text1">
                                    新品</a>
                            </li>
                            <?php if(is_array($product_type)): $i = 0; $__LIST__ = $product_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product_type): $mod = ($i % 2 );++$i;?><li >
                                    <a href="/?a=products_list&list_id=<?php echo ($product_type["id"]); ?>" target="_self" class="menu-text1">
                                        <?php echo ($product_type["title"]); ?>
                                    </a>
                                    <div class="menu-second">
                                        <p class="top"></p>
                                        <ul>
                                        <?php if(is_array($product_type['next_list'])): $i = 0; $__LIST__ = $product_type['next_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li>
                                                <a href="/?a=products_list&list_id=<?php echo ($list["id"]); ?>" target="_self" class="menu-text2">
                                                    <?php echo ($list["title"]); ?></a>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                        <p class="bottom"></p>
                                    </div>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul>
                    </div>
                    </div>
                </DIV>
            </div>
        </div>

            <div id="wrapper">
                <div id="container">
                    <?php if(is_array($product_list)): $i = 0; $__LIST__ = $product_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product_list): $mod = ($i % 2 );++$i;?><div class="grid">
                        <div class="imgholder"><a href="/?a=products&pid=1"><img class="lazy" src="/images/products/m_<?php echo ($product_list["image"]); ?>"  width="185" onmouseover="setover(this)" onmouseout="setout(this)"  /></a> </div>
                        <strong></strong>
                        <p><?php echo ($product_list["title"]); ?></p>
                        <div class="meta">编号：<?php echo ($product_list["pcode"]); ?></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>

            </div>




        </div>
    <div id="test" style="display:none;">
        <?php if(is_array($product_list)): $i = 0; $__LIST__ = $product_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$product_list): $mod = ($i % 2 );++$i;?><div class="grid">
                <div class="imgholder"><a href="/?a=products&pid=1"><img class="lazy" src="/images/products/m_<?php echo ($product_list["image"]); ?>"  width="185" onmouseover="setover(this)" onmouseout="setout(this)"  /></a> </div>
                <strong></strong>
                <p><?php echo ($product_list["title"]); ?></p>
                <div class="meta">编号：<?php echo ($product_list["pcode"]); ?></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

    </div>

    <script type="text/javascript">
        $(function(){
            $("img.lazy").lazyload({
                load:function(){
                    $('#container').BlocksIt({
                        numOfCol:5,
                        offsetX: 8,
                        offsetY: 8
                    });
                }
            });
            $(window).scroll(function(){
                // 当滚动到最底部以上50像素时， 加载新内容
                if ($(document).height() - $(this).scrollTop() - $(this).height()<50){
                    $('#container').append($("#test").html());
                    $('#container').BlocksIt({
                        numOfCol:5,
                        offsetX: 8,
                        offsetY: 8
                    });
                    $("img.lazy").lazyload();
                }
            });

            //window resize
            var currentWidth = 1180;
            $(window).resize(function() {
                var winWidth = $(window).width();
                var conWidth;
                if(winWidth < 660) {
                    conWidth = 440;
                    col = 2
                } else if(winWidth < 880) {
                    conWidth = 660;
                    col = 3
                } else if(winWidth < 1100) {
                    conWidth = 880;
                    col = 4;
                } else {
                    conWidth = 1100;
                    col = 5;
                }

                if(conWidth != currentWidth) {
                    currentWidth = conWidth;
                    $('#container').width(conWidth);
                    $('#container').BlocksIt({
                        numOfCol: col,
                        offsetX: 8,
                        offsetY: 8
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
        function setover(obj) {
            obj.style['opacity'] = 0.8;
            obj.style['filter'] = 'alpha(opacity=50)';
        }
        function setout(obj) {
            obj.style['opacity'] = 1;
            obj.style['filter'] = 'alpha(opacity=100)';
        }
    </script>
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



</body></html>