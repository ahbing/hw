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
        <span class="h-title">JoinUs</span>
        <span class="h-logo"></span>
    </header>
    <!-- end top header -->

            
    <section class="form-box">
        <p class="hw-title">HelloWorld</p>
        <form action="<?php echo U('Index/join');?>" method="post">
            <div class="half-name">
                <input type="text" name="name" placeholder="姓名" required>
            </div>
            <div class="half-sex">
                <span class="sim-input">性别选择</span>
                <ul class="data-list hide-fade">
                    <li>妹纸</li>
                    <li>汉子</li>
                </ul>
                <input type="hidden" name="sex" required/>
            </div>
            <div>
                <input type="text" name="college" placeholder="院系" required>
            </div>
            <div>
                <input type="tel" name="number" placeholder="学号" minlength='8' maxlength='8' required>
            </div>
            <div>
                <input type="tel" name="tel" placeholder="手机号" minlength='11' maxlength='11' required>
            </div>
            <div>
                <span class="sim-input">意向部门</span>
                <ul class="data-list hide-fade">
                    <li>行政部</li>
                    <li>产品部</li>
                    <li>后台组</li>
                    <li>前端组</li>
                    <li>安卓组</li>
                </ul>
                <input type="hidden" name="department" required>
            </div>
            <div>
                <textarea placeholder="自我介绍（140字内)" type="text" name="intro" maxLength="140" required></textarea>
            </div>
            <div>
                <input class="button" type="submit" value="提交" />
            </div>
        </form>
    </section>

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