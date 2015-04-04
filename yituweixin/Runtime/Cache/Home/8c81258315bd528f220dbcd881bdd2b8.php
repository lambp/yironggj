<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>伊融金融国际</title>
    <meta name="description" content="伊融金融国际" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <style type="text/css">
        *{margin:0;padding:0}body{margin:0;font-family:Arial,Helvetica,sans-serif;font-size:13px;line-height:1.5}.swiper-container{height:1008px;width:640px}.device{width:640px;height:auto;margin:0 auto;position:relative;overflow:hidden}.wiper-container{height:auto;width:640px;overflow:hidden}img{display:block;border:0}.hide{display:none}.rel{position:relative}.abs{position:absolute}.swiper-slide{width:640px;height:1008px}.swiper-slide div{position:absolute;width:100%;height:100%;left:0;top:0;z-index:9}div.bg{text-align:center;z-index:9}div.main{z-index:2}div.draw{opacity:0}div.resize img{width:0;bottom:0;right:0}div.down img{width:0;bottom:0;right:0}div.info{left:640px}.ikea-audio .music p span{background:url(images/music.png) no-repeat 0 0;background-size:cover;cursor:pointer}.ikea-audio{top:1%;right:1%;z-index:999;max-width:50px}.ikea-audio .music p{width:100%;height:100%}.ikea-audio .music p span{display:none;width:100%;height:100%}.ikea-audio .music p span:first-child{display:block}.ikea-audio .music audio{height:0;width:0;opacity:0}.ikea-audio .music p span.audio_open{background-position:-100% 0}.ikea-audio .music p span.audio_close{background-position:0 0}.loading{text-align:center;height:128px;width:100%;z-index:99;top:0;left:0}.loading img{width:128px;margin:0 auto}div.videocontroller,div.video{bottom:0;left:0;height:39%;width:100%;z-index:9}div.video{z-index:10}.citylist{width:50%;height:23%;z-index:9;top:30.75%;left:25%}.citylist a{display:block;float:left;width:33%;height:25%;overflow:hidden;text-indent:-200%} .topShare { opacity:0; display:none; }.light{ cursor:pointer; position: absolute; left: -180px; top: 0; width: 180px; height: 90px; background-image: -moz-linear-gradient(0deg,rgba(255,255,255,0),rgba(255,255,255,0.5),rgba(255,255,255,0)); background-image: -webkit-linear-gradient(0deg,rgba(255,255,255,0),rgba(255,255,255,0.5),rgba(255,255,255,0)); transform: skewx(-25deg); -o-transform: skewx(-25deg); -moz-transform: skewx(-25deg); -webkit-transform: skewx(-25deg); }
        .case{height:auto!important;}
    </style>
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=1.0">
    <script type="text/javascript">
        var phoneWidth = parseInt(window.screen.width);
        var phoneScale = phoneWidth/640;
        var ua = navigator.userAgent;
        if (/Android (\d+\.\d+)/.test(ua)){
            if (phoneWidth >  640) {
                document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">');
            }
        } else {
            document.write('<meta name="viewport" content="width=device-width, user-scalable=no, target-densitydpi=device-dpi">');
        }
    </script>
</head>
<body>
<div id="loading" class="loading" style="display: none;"><img src="images/load.gif">加载中...</div>
<div class="device rel" id="device" style="top: 0px;">
    <div class="swiper-container" id="swiper-container" style="cursor: -webkit-grab;">
        <div class="swiper-wrapper" style="height: auto; width: 720px;">
            <div class="swiper-slide rel swiper-slide-visible swiper-slide-active">
                <div class="main"><img src="/images/about/w1.jpg"></div>
                <!--div class="bg rel">
                    <div id="rotate2" style="height: 540px; width: 540px; opacity: 1; display:none"><img class="lazy" src="images/1_1.png" id="imagess2"></div>
                    <div id="rotate3" style="height: 540px; width: 540px; opacity: 1; display:none"><img class="lazy" src="images/1_2.png" id="imagess3"></div>
                    <div id="light" style="height: 1134px; width: 720px; opacity: 1;"><img src="images/light.png"></div>
                </div-->
            </div>
            <div class="swiper-slide rel">
                <div class="main"><img class="lazy" data-original="/images/about/w2.jpg"></div>

            </div>
            <div class="swiper-slide rel">
                <div class="main"><img class="lazy" data-original="/images/about/w3.jpg"></div>

            </div>
            <div class="swiper-slide rel">
                <div class="main"><img class="lazy" data-original="/images/product.jpg"></div>

            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="/js/analytics.js"></script>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript">
    !window.jQuery && document.write('<script type="text/javascript" src="/resources/js/jquery-1.8.3.js"></script>');
</script>
<script type="text/javascript" src="/js/main-min.js"></script>
</body>
</html>