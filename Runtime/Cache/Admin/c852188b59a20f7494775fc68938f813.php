<?php if (!defined('THINK_PATH')) exit();?>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>后台登录</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link href="<?php echo C('CSS_URL');?>bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="<?php echo C('CSS_URL');?>style.css" type="text/css" rel="stylesheet">
  <link type="text/css" href="<?php echo C('CSS_URL');?>bootstrapValidator.min.css" rel="stylesheet">
  <script src="<?php echo C('JS_URL');?>jquery-2.1.4.min.js" type="text/javascript"></script>
  <link rel="apple-touch-icon-precomposed" href="<?php echo C('IMG_URL');?>icon/icon.png">
  <link rel="shortcut icon" href="<?php echo C('IMG_URL');?>icon/favicon.ico">

</head>

<body class="container">

<div class="col-md-6 text-center">
  <div>
    <div>


    </div>
    <h3>欢迎登录</h3>

    <form class="m-t" role="form" action="">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="用户名" required="">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="密码" required="">
      </div>
      <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


      <p class="text-muted text-center"> <a href="login.html#"><small>忘记密码了？</small></a>
      </p>

    </form>
  </div>
</div>

<script src="<?php echo C('JS_URL');?>bootstrap.min.js" type="text/javascript"></script>

</body>

</html>