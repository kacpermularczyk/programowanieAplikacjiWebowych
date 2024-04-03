<?php
/* Smarty version 4.3.2, created on 2024-04-01 22:56:44
  from 'E:\xampp\htdocs\php_05_obiektowosc\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660b1f8cb67a98_57844725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208d0e8bee356281ffc2773bd73decf32ea8a14e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php_05_obiektowosc\\templates\\main.html',
      1 => 1712004230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b1f8cb67a98_57844725 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1186779803660b1f8cb65ca6_47917762', 'banner');
?>

            </section>

            <section id="contact">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1474801800660b1f8cb661b0_05307217', 'content');
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
class Block_1186779803660b1f8cb65ca6_47917762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1186779803660b1f8cb65ca6_47917762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na banner <?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_1474801800660b1f8cb661b0_05307217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1474801800660b1f8cb661b0_05307217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 miejsce na formularz <?php
}
}
/* {/block 'content'} */
}
