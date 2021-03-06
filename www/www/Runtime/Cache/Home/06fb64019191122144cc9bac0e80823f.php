<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-EN">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>迈尔斯社群|MY EARTH’S Community</title>
    <link rel="stylesheet" href="/Public/css/public.css">
    <link rel="stylesheet" href="/Public/css/community.css">
    <!--[if lt IE 9]>
    <script>(function(){if (!/*@cc_on!@*/0) return;var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');var i= e.length;while (i--){document.createElement(e[i])}})()</script>
    <![endif]-->
</head>
<body>
<div class="wrap">
    <!--include header.html-->
    <header id="header" class="header">
        <div class="h-wrap">
            <a class="h-log" href=""></a>
            <nav class="h-nav">
                <a class="h-b-a" href="<?php echo U('Index/index');?>">首页</a>
                <a class="h-b-a" href="<?php echo U('Article/projLevelOne');?>">项目介绍</a>
                <a class="h-b-a" href="<?php echo U('Article/listConsult');?>">达人资讯</a>
                <a class="h-b-a" href="<?php echo U('Article/showStaticPage', 'name=community');?>">迈尔斯社群</a>
                <a class="h-b-a" href="<?php echo U('Article/showStaticPage', 'name=about');?>">关于我们</a>
                <a class="h-b-a" href="<?php echo U('Article/showStaticPage', 'name=contact');?>">联系我们</a>

            </nav>
        </div>
    </header>
    <article class="banner">
        <img class="b-img" src="/Public/images/communitybanner.png" alt="">
    </article>
    <section class="main2">
        <article class="m2-info">
            <img class="m2-i-pic" src="/Public/images/community/detail2-7.jpg" alt="">
            <div class="m2-i-wrap">
                <h3 class="m2-i-name">张开强</h3>
                <p class="m2-i-intro">金色可以联想到阳光；蓝色可以联想到海洋；而我，则可以让你联想并实现梦想。

                    <br><br>七年多以来专注于高端留学文书写作，接手过500多个学生的高端留学文书写作，其中涵盖高中、本硕博申请，助广大学子获得top名校录取。我喜欢在轻松愉快的漫谈中充分挖掘每一位学生的个性化信息，根据现有的背景素材中进行专业点睛，为每一位学生打造私人专属的高质量个性化文书。

                    <br><br>“长风破浪会有时，直挂云帆济沧海”。希望我的专业能够助你在前行梦想的道路上扬帆起航！
                </p>
                <p class="m2-i-recom"></p>
            </div>
        </article>
        <a class="m2-btn" href="javascript:history.go(-1)" title="返回"></a>
    </section>
    <!--include footer.html-->
    <footer class="footer">
        <div class="f-link">
            <a class="f-l-wx f-l-icon" href=""></a>
            <a class="f-l-wb f-l-icon" href=""></a>
            <a class="f-l-f f-l-icon" href=""></a>
            <a class="f-l-fx f-l-icon" href=""></a>
            <a class="f-l-in f-l-icon" href=""></a>
            <a class="f-l-g f-l-icon" href=""></a>
        </div>
        <article class="f-bom">
            <h2 class="f-m-tit">迈尔斯国际教育</h2>
            <p class="f-m-tel">028-85963901</p>
            <p class="f-m-p">
                <span class="f-m-adds">地址：成都市高新区盛安街133号汇锦广场A座11层</span>
                <span class="f-m-website">网址：www.my-earth.cn</span>
            </p>
            <p class="f-m-copy">Copyright © 2015迈尔斯 沪ICP备10011451号-6</p>
        </article>
    </footer>
</div>
</body>
</html>