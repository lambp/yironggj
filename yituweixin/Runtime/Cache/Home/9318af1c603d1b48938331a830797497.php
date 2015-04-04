<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<link href="/resources/css/lib.min.css" rel="stylesheet" type="text/css" />
<link href="/resources/css/page_news_detail.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/resources/js/jquery.js"></script>
<script type="text/javascript" src="/resources/js/lib.min.js"></script>


<link href="/resources/css/pub_page.css" rel="stylesheet" type="text/css" />
<link href="/resources/css/scrollBar.css" rel="stylesheet" type="text/css" />
<link href="/resources/css/jScrollPane.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/resources/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/resources/js/jScrollPane.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#scrollContent").jScrollPane();
    });
</script>
</head>
<body id="news_detail">
<div class="pageWidth" id="box_root">
    <!-- 一列版式开始 -->
    <div id="box_news_detail">
        <!-- 主体内容开始 -->
        <div class="columnSpace" id="elem-FrontNews_detail01-001" name="资讯详细信息">
            <div id="scrollContent" class="scrollArea scroll-pane">

                    <div id="FrontNews_detail01-001" class="FrontNews_detail01-d1_c1">
                        <div id="newsdetailshow" >
                            <h2><?php echo ($about["title"]); ?></h2>
                            <div class="message">
                                <span class="author"><em>作者：</em><?php echo ($about["account_name"]); ?></span><span class="source">
                                <em>来源：</em><?php echo ($about["from_msg"]); ?></span>
                                <span class="skim"><em>浏览次数：</em><span id="visitedCount"><?php echo ($about["click_num"]); ?></span></span>
                                <span class="date"><em>日期：</em> <?php echo date('Y年m月d日 H:i',$about[add_time]); ?></span>
                            </div>
                            <div class="summary">
                            </div>
                            <div class="describe htmledit" id="infoContent">
                               <?php echo ($about["message"]); ?>
                            </div>
                                <p></p>
                            <div class="operate"></div>
                            <div class="page">
                                <p class="pre">
                                    <span>上一篇：</span><span id="preInfo"><a href="/?a=news_detail&id=1"  >伊融国际案例分享1</a></span>
                                </p>
                                <p class="next">
                                    <span>下一篇：</span><span id="nextInfo"><a href="/?a=news_detail&id=1"  >伊融国际案例分享2</a></span>
                                </p>
                            </div>

                    </div>
                    </div>
                <script type="text/javascript">
                    jQuery("#newsdetailshow").show();
                </script>

            </div>
        </div>
        <!-- 主体内容结束 -->
    </div>
    <!-- 一列版式结束 -->

</div>

</body>

</html>