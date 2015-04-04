<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <link href="/resources/css/lib.min.css" rel="stylesheet" type="text/css" />
    <link href="/resources/css/page_news_list.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/resources/js/jquery.js"></script>
    <script type="text/javascript" src="/resources/js/lib.min.js"></script>


    <link href="/resources/css/pub_page.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        $(document).ready(function(){
            $('li.content a').attr('target','news');
            $("li.content a").click(function(){
                $(".news_detail").animate({left:"0px"}, 400);
            });
            $("a.close_news").click(function(){
                $(".news_detail").animate({left:"-100%"}, 400);
            });

            var _liClass = "rim";
            var _i = 1;
            $("#FrontNews_list01-002 ul li.content").each(function() {
                var _t = $(this);
                if(!_t.hasClass("first") && !_t.hasClass("last")) {
                    _t.addClass(_liClass + _i);
                    _i++;
                }
            });

            $("#FrontNews_list01-002 ul li.content").hover(function(){
                $(this).children('div.main').stop().show();
            },function(){
                $(this).children('div.main').stop().hide();
            });

        });
    </script>


</head>
<body id="news_list">
<div class="pageWidth" id="box_root">
<div class="news_detail">
    <div class="news_iframe">
        <iframe allowtransparency="true" frameborder="0" height="600" name="news" marginheight="0" marginwidth="0" scrolling="no" src="/loading.html" width="1000"></iframe>
    </div>
    <a class="close_news" href="/loading.html" target="news">关闭</a>
</div>

<!-- 一列版式开始 -->
<div id="box_group">
<!-- 主体内容开始 -->
<div id="box_group_list">
<div class="columnSpace" id="elem-FrontNews_list01-002">

    <div id="FrontNews_list01-002" class="group_list01-d2_c2">
        <ul>
            <?php if(is_array($group_list)): foreach($group_list as $key=>$list): ?><li class="content"><a href="/?a=group_detail&id=<?php echo ($list["id"]); ?>"><img src="/images/about/m_<?php echo ($list["image"]); ?>"/></a></li><?php endforeach; endif; ?>
        </ul>

        <div class="pageJump">
            <div class="pageJump">
                <div class="number">
                    <a class="prev" href="#" onclick="return jump_page(1,7);">下一页</a><a class="next" href="#" onclick="return jump_page(2,7);">下一页</a>
                </div>
                <script language="javascript" type="text/JavaScript">
                    function jump_page(page,sum){
                        window.location.href="?a=group_list&page="+page;
                        return false;
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var MenuName = "下一页";
        var MenuTxt = "上一页";
        $(".number").children().each(function (i, val) {
            if (MenuName == val.innerHTML) {
                $(this).addClass("next");
            }
            if (MenuTxt == val.innerHTML) {
                $(this).addClass("prev");
            }
        });
    });
</script>
</div>
<div class="box_group_text"></div>
<!-- 主体内容结束 -->
</div>
<!-- 一列版式结束 -->

</div>
</body>
</html>