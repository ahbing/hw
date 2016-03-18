<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>helloworld</title>
    <link rel="stylesheet" href="/Public/mobile/css/main.css">
    <link rel="stylesheet" href="/Public/mobile/css/font-awesome.min.css">
</head>

<body>
    <p class="error-info hide-fade"></p>
    <p class="remain-info hide-fade"></p>
    <div class="container">
        <article class="wrapper left-out">
            
    <header>
        <span class="more fa fa-lg fa-bars">

		</span>

        <span class="h-title">Home</span>
        <span class="h-logo"></span>
    </header>
    <!-- end top header -->

            
    <section class="index-box">
        <img src="/Public/mobile/images/hw-logo-normal.png" alt="logo">
        <!--<p class="hw-title">HelloWorld</p>-->
        <div class="hw-intro">
            <p>Hack forward,until limitless.</p>
            <p>life is but a tale,told by hacker.</p>
        </div>
        <p class="see-video">观看简介视频</p>
    </section>

        </article>
        
<article class="video-page">
        <span class="close-video-btn">+</span>
        <video data-src="<?php echo ($video["url"]); ?>" controls autoplay>
            你的浏览器不支持html5 video，请使用chrome等标准浏览器。
        </video>
</article>

        
            <article data-show="false" class="main-nav">
                <section class="nav-header">
                    <img src="/Public/mobile/images/hw-logo-big.png" alt="logo">
                </section>
                <nav class="nav-list">
                    <ul>
                        <li><i class="fa fa-home"></i><a href="<?php echo U('index/index');?>">Home</a></li>
                        <li><i class="fa fa-home"></i><a href="<?php echo U('index/intro');?>">Introduction</a></li>
                        <li><i class="fa fa-home"></i><a href="<?php echo U('index/news');?>">News</a></li>
                        <li><i class="fa fa-home"></i><a href="<?php echo U('index/join');?>">JoinUs</a></li>
                    </ul>
                </nav>
            </article>
            <!--end left nav -->
        
    </div>
    <script src="/Public/mobile/js/init.js"></script>
    <script src="/Public/mobile/js/main.js"></script>
</body>

</html>