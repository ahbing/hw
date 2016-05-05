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
        <span class="h-title">Introduction</span>
        <span class="h-logo"></span>
    </header>
    <!-- end top header -->

            
    <section class="ball-box">
        <?php if(is_array($departList)): foreach($departList as $key=>$vo): if(!empty($vo['child'])): ?><div class="big-ball big-ball-<?php echo ($key+1); ?>" id="technology">
                    <?php echo ($vo["department"]); ?>
                    <?php if(is_array($vo["child"])): foreach($vo["child"] as $key=>$childvo): ?><div class="small-ball small-ball-<?php echo ($key+1); ?>" >
                            <p class="small-ball-self-<?php echo ($key+1); ?>" data-id='<?php echo ($childvo["id"]); ?>'><?php echo ($childvo["department"]); ?></p>
                        </div><?php endforeach; endif; ?>
                </div>
            <?php else: ?>
                <div class="big-ball big-ball-<?php echo ($key+1); ?>" data-id='<?php echo ($vo["id"]); ?>'>
                    <?php echo ($vo["department"]); ?>
                </div><?php endif; endforeach; endif; ?>
    </section>
    <!--end ball box-->
    <?php if(is_array($departList)): foreach($departList as $key=>$vo): if(!empty($vo['child'])): if(is_array($vo["child"])): foreach($vo["child"] as $key=>$childvo): ?><section class="intro-box intro-box-<?php echo ($childvo["id"]); ?> down-out">
                        <p class="d-name"><?php echo ($childvo["department"]); ?></p>
                        <div class="intro-text">
                            <?php echo ($childvo["intro"]); ?>
                        </div>
                        <p class="back">
                        </p>
                    </section><?php endforeach; endif; ?>
        <?php else: ?>
            <section class="intro-box intro-box-<?php echo ($vo["id"]); ?> down-out">
                <p class="d-name"><?php echo ($vo["department"]); ?></p>
                <div class="intro-text">
                    <?php echo ($childvo["intro"]); ?>
                </div>
                <p class="back">
                </p>
            </section><?php endif; endforeach; endif; ?>
    <!--end intro box-->

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