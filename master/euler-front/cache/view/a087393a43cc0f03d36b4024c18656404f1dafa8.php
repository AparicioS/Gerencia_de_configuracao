<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EULER - <?php echo $__env->yieldContent('title'); ?></title>
    <base href="/master/euler-front/" target="_self">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/master/euler-front/public/css/style.css">
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/master/euler-front/public/JS/jquery.js" type="text/javascript"></script>
    <script src="/master/euler-front/public/JS/jquery.mask.js" type="text/javascript"></script>
    <script src="/master/euler-front/public/JS/js_global.js" type="text/javascript"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>