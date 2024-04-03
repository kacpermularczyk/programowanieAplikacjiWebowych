<?php
/* Smarty version 4.3.2, created on 2024-04-01 23:11:30
  from 'E:\xampp\htdocs\php_06_kontroler_glowny\app\calc\calcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_660b2302c70717_04990728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccd935b868c7eb470f6e92465894d6c078bad2e1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\calc\\calcView.html',
      1 => 1712005856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660b2302c70717_04990728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1750667396660b2302c67a38_50315819', 'banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_503574186660b2302c681c8_12739974', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'banner'} */
class Block_1750667396660b2302c67a38_50315819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'banner' => 
  array (
    0 => 'Block_1750667396660b2302c67a38_50315819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="inner">
    <header class="major">
        <h1>Kalkulator kredytowy - kontroler główny</h1>
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
class Block_503574186660b2302c681c8_12739974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_503574186660b2302c681c8_12739974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="inner">
    <section>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
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
