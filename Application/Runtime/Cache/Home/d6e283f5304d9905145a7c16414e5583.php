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
        <span class="h-title">News</span>
        <span class="h-logo"></span>
    </header>
    <!-- end top header -->

            
    <section class="news-box">
        <a class="new-title" href="">这是新闻的标题</a>
        <div class="new-image">
            <img src="/Public/mobile/images/hw-logo-big.png" alt="新闻标题">
        </div>
        <div class="new-time-line">
            <ul>
                <!-- important span 标签不可换行 -->
                <li><a href="#">01/<span class="month">12</span>
					</a></li>
                <li><a href="#">02/<span class="month">1</span>
					</a></li>
                <li><a href="#">03/<span class="month">12</span></a>
                </li>
                <li><a href="#">04/<span class="month">12</span>
					</a></li>
                <li><a href="#">05/<span class="month">12</span>
					</a></li>
                <li><a href="#">06/<span class="month">12</span>
					</a></li>
                <li><a href="#">07/<span class="month">12</span>
					</a></li>
                <li><a href="#">28/<span class="month">12</span>
					</a></li>
                <li><a href="#">28/<span class="month">12</span>
					</a></li>
            </ul>
        </div>
    </section>
    <!--end intro main-->

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