<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<script src="/Public/Admin/js/jquery.min.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
<link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="">
</head>
<style type="text/css">
  #sign-in{height:500px;width: 700px;margin: 0px auto;}
  /*input{margin-top: 50px;}*/
</style>
<body>
   <div  id="sign-in">
    <form class="form-signin" method="post" action="<?php echo U('Admin/User/admin');?>">
        <h2 class="form-signin-heading">Sign in</h2>
        <label for="inputName" class="sr-only">Nickname</label>
        <input type="text" id="inputName" class="form-control" placeholder="Nickname" required autofocus name="name">
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pwd">
        <br>
        <button class="btn btn-primary " type="submit" >Sign in</button>
    </form>
   </div>
</body>
</html>