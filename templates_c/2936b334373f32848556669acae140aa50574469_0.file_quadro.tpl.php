<?php
/* Smarty version 5.4.3, created on 2025-02-18 13:34:18
  from 'file:quadro.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67b48c5a52e6c3_67236110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2936b334373f32848556669acae140aa50574469' => 
    array (
      0 => 'quadro.tpl',
      1 => 1739885655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67b48c5a52e6c3_67236110 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/nicola/Workspace/Sites/netmedica/templates';
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetti Medici</title>
    <link rel="stylesheet" href="../netmedica/assets/css/style.css">
</head>
<body>

    <div>
        <h1>Progetti Medici</h1>
        <br>
    </div>

    <div id="progetti-container">

        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('projects'), 'project');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('project')->value) {
$foreach0DoElse = false;
?>

            <div class="progetto-card" data-id="<?php echo $_smarty_tpl->getValue('project')['id_progetto'];?>
" data-name="<?php echo $_smarty_tpl->getValue('project')['progetto'];?>
" data-performance="<?php echo $_smarty_tpl->getValue('project')['performance'];?>
" data-img="assets/<?php echo $_smarty_tpl->getValue('project')['img'];?>
">

                <img src="assets/<?php echo $_smarty_tpl->getValue('project')['img'];?>
" alt="">

                <div class="content">

                    <h3><?php echo $_smarty_tpl->getValue('project')['progetto'];?>
</h3>
                    <p class="performance"><?php echo $_smarty_tpl->getValue('project')['performance'];?>
%</p>

                </div>

            </div>

        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

    </div>

<?php echo '<script'; ?>
 src="../netmedica/assets/script/script.js"><?php echo '</script'; ?>
>

</body>

<!-- Modal -->
<div id="projectModal" class="modal">
    <div class="modal-content ">
        <span class="close">&times;</span>
        <img id="modal-img" src="" alt="">
        <h3 id="modal-name"></h3>
        <p id="modal-performance" class="performance"></p>
    </div>
</div>

</html>

<?php }
}
