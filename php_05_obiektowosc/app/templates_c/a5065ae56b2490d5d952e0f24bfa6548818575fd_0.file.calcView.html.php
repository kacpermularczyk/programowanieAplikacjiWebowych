<?php
/* Smarty version 4.3.2, created on 2024-04-01 15:43:26
  from 'E:\xampp\htdocs\php_05_obiektowosc\app\calcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660ab9fec07003_31788949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5065ae56b2490d5d952e0f24bfa6548818575fd' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php_05_obiektowosc\\app\\calcView.html',
      1 => 1711978894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660ab9fec07003_31788949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1166265654660ab9febfde80_29733937', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_726584858660ab9febfe637_88166547', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'banner'} */
class Block_1166265654660ab9febfde80_29733937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1166265654660ab9febfde80_29733937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="inner">
    <header class="major">
        <h1>Kalkulator kredytowy - obiektowo</h1>
    </header>
    <div class="content">
        <p>W pełni działający Kalkulator kredytowy,<br />
        liczący miesięczną ratę kredytu.</p>
        <ul class="actions">
            <li><a href="#contact" class="button next scrolly">Policz</a></li>
        </ul>
    </div>
</div>

<?php
}
}
/* {/block 'banner'} */
/* {block 'content'} */
class Block_726584858660ab9febfe637_88166547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_726584858660ab9febfe637_88166547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="inner">
    <section>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">
            <div class="fields">
                <div class="field">
                    <label for="amount">Kwota kredytu</label>
                    <input type="text" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
"/>
                </div>
                <div class="field">
                    <label for="years">Na ile lat</label>
                    <input type="text" name="years" id="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
"/>
                </div>
                <div class="field">
                    <label for="interestRate">oprocentowanie</label>
                    <input type="text" name="interestRate" id="interestRate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interestRate;?>
"/>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Oblicz" class="primary" /></li>
                <li><input type="reset" value="Zresetuj" /></li>
            </ul>
        </form>
    </section>
    <section class="split">
        <section>
            <div class="contact-method">
                <h3>Wynik</h3>

                <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
                    <p>
                    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                    </p>
                <?php }?>

            </div>
        </section>
		<section>
            <div class="contact-method">
                <h3>Informacje</h3>

                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?> 
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>

            </div>
        </section>
		<section>
            <div class="contact-method">
                <h3>Błędy</h3>

                    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->getErrors()) {?> 
                        <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>

            </div>
        </section>
    </section>
</div>

<?php
}
}
/* {/block 'content'} */
}
