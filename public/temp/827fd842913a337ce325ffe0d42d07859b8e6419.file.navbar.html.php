<?php /* Smarty version Smarty-3.0.8, created on 2015-02-26 21:43:36
         compiled from "D:\wamp\www\BiliFun-master/tpl\navbar.html" */ ?>
<?php /*%%SmartyHeaderCode:1649754ef23081199e2-10855088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '827fd842913a337ce325ffe0d42d07859b8e6419' => 
    array (
      0 => 'D:\\wamp\\www\\BiliFun-master/tpl\\navbar.html',
      1 => 1424874360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1649754ef23081199e2-10855088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- fixed nav -->
    <nav id="my-nav" class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <span id="my-title" class="navbar-brand"><?php echo $_smarty_tpl->getVariable('conf')->value['sitename'];?>
</span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" placeholder="夢" id="form-bg" class="form-control" />
            </div>
            <button type="submit" class="btn">寻 夢</button>
          </form>
          <!--  -->
          <ul class="nav navbar-nav navbar-right">
            <li><a id="my-nav1" href="#"> 登录</a></li>
            <li><a id="my-nav2" href="#"> 投稿</a></li>
            <li><a id="my-nav3" href="#"> 收藏</a></li>
          </ul>
          <div class="my-navbar">
            <ul class="nav navbar-nav navbar-right nav-pills">
            <?php  $_smarty_tpl->tpl_vars['bfc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['bfc']->key => $_smarty_tpl->tpl_vars['bfc']->value){
?><?php if ($_smarty_tpl->tpl_vars['bfc']->value['stat']>=0){?>
              <li <?php if ($_smarty_tpl->tpl_vars['bfc']->value['stat']==1){?> class="active" <?php }?>><a id="to-<?php echo $_smarty_tpl->tpl_vars['bfc']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['bfc']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['bfc']->value['category'];?>
</a></li>
            <?php }?><?php }} ?>
            </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>