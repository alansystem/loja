<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-27 11:44:59
  from 'C:\xampp\htdocs\loja\adm\view\adm_itens.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e0618eb43a554_51743293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c116b4a4bacb2da061969ff5cc8158bbf141078' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\adm\\view\\adm_itens.tpl',
      1 => 1577457896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0618eb43a554_51743293 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    function goBack() {
        window.history.back();
    }
<?php echo '</script'; ?>
>

<div class="container">
    <div class="row no-gutters justify-content-center">
        <div class="col my-3">
            <h4 class="text-center">Dados do pedido</h4>
            <!-- informações sobre o pedido -->
            <div class="row no-gutters justify-content-end">
                <button onclick="goBack()" class="btn btn-warning">Voltar</button>
            </div>
            <section class="row no-gutters">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</th>
                            <th scope="col"><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</th>
                            <th scope="col"><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</th>
                            <th scope="col"><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</th>
                        </tr>
                    </thead>
                </table>
            </section>
            <!-- listagem dos itens -->
            <section class="row no-gutters" id="listaitens">
                <table class="table table-bordered table-hover">
                    <tr class="font-weight-bold">
                        <th scope="row"></th>
                        <td>Item</td>
                        <td class="text-center">Valor Unitário</td>
                        <td class="text-center">X</td>
                        <td class="text-center">Sub</td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <tr>
                        <th scope="row"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </th>
                        <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
                        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
                        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
                        <td class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </section>
            <section class="row no-gutters" id="resumo">
                <table class="table table-bordered">
                    <tr>
                        <td class="text-danger"><b>Frete:</b>R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>
                        <td class="text-danger"><b>Total:</b>R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                        <td class="text-danger"><b>Valor Total:</b>R$ <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                    </tr>
                </table>
            </section>

            <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'NAO') {?>
            <!--  modos de pagamento e outras informações -->
            <section class="row">
                <h3 class="text-center"> Formas de pagamento </h3>
                <div class="col-md-4">
                </div>
                <!-- botao de pagamento  -->
                <div class="col-md-4">
                    BOTÃO DE PAGAMENTO
                    <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" alt="">
                    <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>
                </div>
                <div class="col-md-4">
                </div>
            </section>
            <?php }?>
        </div>
    </div>
</div><?php }
}
