<?php
/* Smarty version 4.3.2, created on 2024-04-01 15:45:34
  from 'E:\xampp\htdocs\php_05_obiektowosc\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660aba7e3cc7b9_69745059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da02f333b99cf5c990e63595cd90579aa8ca363a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php_05_obiektowosc\\templates\\main.html',
      1 => 1711979016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660aba7e3cc7b9_69745059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-preload">

        <div id="wrapper">

            <header id="header" class="alt">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php" class="logo"><strong><?php echo (($tmp = $_smarty_tpl->tpl_vars['first_part_of_title']->value ?? null)===null||$tmp==='' ? "Tytuł" ?? null : $tmp);?>
</strong> <span><?php echo (($tmp = $_smarty_tpl->tpl_vars['second_part_of_title']->value ?? null)===null||$tmp==='' ? "domyślny" ?? null : $tmp);?>
</span></a>
            </header>

            <section id="banner" class="major">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172196623660aba7e3ca603_75562780', 'banner');
?>

            </section>

            <section id="contact">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1003751252660aba7e3cae23_34708403', 'content');
?>

            </section>

            <footer id="footer">
                <div class="inner">
                    <ul class="copyright">
                        <li>Widok oparty na stylach: <a href="https://html5up.net">HTML5 UP</a></li>
                        <li>Autor przykładu - Kacper Mularczyk</li>
                    </ul>
                </div>
            </footer>

            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

        </div>

    </body>
</html><?php }
/* {block 'banner'} */
class Block_172196623660aba7e3ca603_75562780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_172196623660aba7e3ca603_75562780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na banner <?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1003751252660aba7e3cae23_34708403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1003751252660aba7e3cae23_34708403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na formularz <?php
}
}
/* {/block 'content'} */
}
