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
        <a class="new-title" href="<?php echo ($news["url"]); ?>"><?php echo ($news["title"]); ?></a>
        <div class="new-image">
            <a href="<?php echo ($news["url"]); ?>">
                <img src="/Public/mobile/images/hw-logo-big.png" alt="新闻标题">
            </a>
        </div>
        <div class="new-time-line">
            <ul>
                <!-- important span 标签不可换行 -->
                <?php if(is_array($news)): foreach($news as $key=>$vo): ?><li><a href="javascript:void(0);"><?php echo ($vo["day"]); ?>/<span class="month"><?php echo ($vo["month"]); ?></span>
                        </a></li><?php endforeach; endif; ?>
            </ul>
        </div>
    </section>
    <script>
        
    </script>
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