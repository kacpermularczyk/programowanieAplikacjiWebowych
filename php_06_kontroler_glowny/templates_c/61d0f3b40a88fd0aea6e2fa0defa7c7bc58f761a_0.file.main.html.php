<?php
/* Smarty version 4.3.2, created on 2024-04-01 23:05:55
  from 'E:\xampp\htdocs\php_06_kontroler_glowny\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660b21b3ce9ee2_04830573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61d0f3b40a88fd0aea6e2fa0defa7c7bc58f761a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php_06_kontroler_glowny\\templates\\main.html',
      1 => 1712004230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b21b3ce9ee2_04830573 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1553449924660b21b3ce81e7_85176692', 'banner');
?>

            </section>

            <section id="contact">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1522668033660b21b3ce86c4_53653971', 'content');
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
class Block_1553449924660b21b3ce81e7_85176692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1553449924660b21b3ce81e7_85176692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na banner <?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1522668033660b21b3ce86c4_53653971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1522668033660b21b3ce86c4_53653971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na formularz <?php
}
}
/* {/block 'content'} */
}
