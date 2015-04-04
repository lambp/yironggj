<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo ($index_msg["title"]); ?></title>
    <link href="/resources/css/lib.min.css" rel="stylesheet" type="text/css" />

    <link href="/resources/css/page_products_detail.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/global.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/page_pro.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/resources/js/mzp-packed.js"></script>
    <link href="/resources/css/magiczoomplus.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/picstyle.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/resources/js/jquery.js"></script>
    <script type="text/javascript" src="/resources/js/catogory.js"></script>
</head>
<body id="products_detail">

<div class="pageWidth" id="box_root">
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
                <div id="FrontProductsCategory_show01-001" class="FrontProductsCategory_show01-d1_c2">
                    <div class="menu-first">
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

    <div id="box_right">

    <div class="columnSpace" id="elem-FrontProducts_detail02-001" name="商品详细信息样式">

    <div id="FrontProducts_detail02-001" class="FrontProducts_detail02-d1_c1">
        <div class="content">

            <div class="pic-module">
                <div class="box">
                    <div class="left-pro">
                        <div class="t2">
                            <a href="/images/products/m_<?php echo ($product_detail["image"]); ?>" id="zoom1" class="MagicZoom MagicThumb"><img src="/images/products/m_<?php echo ($product_detail["image"]); ?>" id="main_img" class="main_img" style="width:400px;" /></a>
                        </div>
                        <div class="t1">

                            <div id="showArea">
                                <a href="/images/products/m_<?php echo ($product_detail["image"]); ?>" rel="zoom1" rev="/images/products/m_<?php echo ($product_detail["image"]); ?>"><img src="/images/products/m_<?php echo ($product_detail["image"]); ?>" /></a>
                            </div>

                        </div>
                    </div>
                </div>

      		<span class="lab">
				</span>
                <div class="btnarea" style='display:none' >
                </div>
                <div id="FrontProducts_detail02-001_moreImgdiv" class="show">
                    <a class="clickL" style="display:none" href="javaScript:FrontProducts_detail02_scroll('FrontProducts_detail02-001_key10ScrollDiv',84)" title="请点击 ">
                        <img src= "/images/pre-no.png" id= "FrontProducts_detail02-001_clickimgL" alt= "请点击 " /></a>
                    <div id="FrontProducts_detail02-001_key10Picarea" class="picarea">
                        <div id="FrontProducts_detail02-001_key10ScrollDiv" class="imgbox">
                            <ul><li id="FrontProducts_detail02-001_key10imglist" class="mutilimg"></li></ul>
                        </div>
                    </div>
                    <a class="clickR" style="display:none" href="javaScript:FrontProducts_detail02_scroll('FrontProducts_detail02-001_key10ScrollDiv',-84)" title="请点击 ">
                        <img src= "/images/products/next-current.gif" id= "FrontProducts_detail02-001_clickimgR" alt= "请点击 " /></a>
                </div>
                <div class="skimpro">
                    <h4><em class="focustext"><a href="/products_list/&amp;pmcId=25.html" target="_self"></a></em></h4>
                    <p class="pre">
                        <span>上一页：</span>
                        <a href="/?a=products&pid=1" target="_self"  >伊融国际</a>
                    </p>
                    <p class="next">
                        <span>下一页：</span>
                        <a href="/?a=products&pid=2" target="_self" >伊融国际</a>
                    </p>
                </div>
            </div>
            <div class="pro-module">
                <ul class="basic">
                    <li class="name1"><span>名称：</span>
                        <?php echo ($product_detail["title"]); ?></li>
                    <li class="code">
                        <span>编号：</span>
                        <?php echo ($product_detail["pcode"]); ?></li>
                    <li class="skim">
                        <span>浏览次数：</span>
                        <em id="FrontProducts_detail02-001_showhitnumber" class="focustext"><?php echo ($product_detail["click_num"]); ?></em>
                    </li>
                </ul>
                <ul class="choose">
                </ul>
                <p class="buttonP">
                </p>
            </div>
        </div>
        <div class="detail">
            <ul id="FrontProducts_detail02-001_tabsFlag">
                <li class="current"><a name="FrontProducts_detail02-001_description" href="javascript:" title="详细介绍">详细介绍</a></li>
            </ul>
            <div id="FrontProducts_detail02-001_description" class="describe htmledit showtabdiv">
                <div class="FrontProducts_detail02-001_htmlbreak" id="FrontProducts_detail02-001_cont_1"
                     style="display: block;">
                    <?php echo ($product_detail["message"]); ?>
                </div>
            </div>
        </div>
        <div class="other">
            <p class="keyword">


            </p>
        </div>
    </div>
    </div>
    <!--InstanceEndEditable-->
    </div>
    <div class="clearBoth"></div>
    <!-- 主体内容结束 -->
    <div class="clearBoth"></div>
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
<script type="text/javascript" src="/resources/js/scrollpic.js"></script>
</body>
</html>