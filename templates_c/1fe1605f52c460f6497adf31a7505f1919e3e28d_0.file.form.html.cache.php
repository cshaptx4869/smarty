<?php
/* Smarty version 3.1.30, created on 2018-04-01 16:08:32
  from "D:\wamp\www\smarty3\templates\form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac0e7e0cae4b2_47527549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe1605f52c460f6497adf31a7505f1919e3e28d' => 
    array (
      0 => 'D:\\wamp\\www\\smarty3\\templates\\form.html',
      1 => 1522305296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_5ac0e7e0cae4b2_47527549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '240595ac0e7e0c3d3b9_98431602';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form action="file.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="exampleInputEmail1" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="exampleInputPassword1" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
            </div>
            <div class="form-group">
                <label class="control-label no-padding-right">Introduction</label>
                <div>
                    <!-- 配置文件 -->
                    <?php echo '<script'; ?>
 type="text/javascript" src="static/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
                    <!-- 编辑器源码文件 -->
                    <?php echo '<script'; ?>
 type="text/javascript" src="static/ueditor/ueditor.all.min.js"><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 type="text/javascript" src="static/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
                    <!-- 加载编辑器的容器 -->
                    <?php echo '<script'; ?>
 type="text/plain" id="ue_introduction" name="introduction" ><?php echo '</script'; ?>
>
                    <?php echo '<script'; ?>
 type="text/javascript">
                    // 实例化编辑器
                    var ue = UE.getEditor('ue_introduction',{
                            // 在实例化的时候可以传入可自定义的参数项给编辑器
                            initialFrameHeight: 200,
                            initialFrameWidth:"100%", //初始化选项
                            autoHeightEnabled: true,
                            autoFloatEnabled: true,
                        });
                    // 在编辑器所有的初始化操作都结束时调用。保证你要做的操作能在一个完整的初始化环境中执行。
                    UE.getEditor('ue_introduction').ready(function () {
                        ue.setContent("拟好(*´▽｀)ノノ <?php echo $_smarty_tpl->tpl_vars['one']->value;?>
 永久缓存"); //设置编辑器的内容
                        var html = ue.getContent(); //获取html内容，返回: <p>hello</p>
                        var txt = ue.getContentTxt(); //获取纯文本内容，返回: hello
                        console.log(ue.getOpt('UEDITOR_HOME_URL')); //读取配置项
                        console.log(ue.getOpt('serverUrl')); //读取配置项
                        console.log(ue.loadServerConfig()); // 向后端请求config
                        console.log(ue.isServerConfigLoaded()); // 判断是否已加载后端config
                    });

                    <?php echo '</script'; ?>
>
                </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>
</html><?php }
}
