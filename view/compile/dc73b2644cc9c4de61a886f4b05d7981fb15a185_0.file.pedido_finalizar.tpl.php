<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-24 23:55:39
  from 'C:\xampp\htdocs\loja\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddb0a6bc0a4d7_54216235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc73b2644cc9c4de61a886f4b05d7981fb15a185' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\pedido_finalizar.tpl',
      1 => 1574636103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb0a6bc0a4d7_54216235 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container containers">
    <div class="row no-gutters">
        <div class="col p-0">
            <div class="col p-0 mt-2">
                <h3>Finalizar Pedido</h3>
                <hr>
            </div>
            <div class="col p-0 mt-2">
                <h3 class="alert alert-success text-success">Pedido Finalizado com Sucesso</h3>
            </div>
            <div class="col p-0 mt-3">
                <table class="table table-bordered">
                    <thead class="">
                        <tr class="table-success text-success">
                        <th scope="col">Produto </th>
                        <th class="text-center" scope="col">Valor <i class="fas fa-dollar-sign"></i></th>
                        <th class="text-center" scope="col">Quantidade</i></th>
                        <th class="text-center" scope="col">Sub Total <i class="fas fa-dollar-sign"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>                   
                        <tr>
                            <td class="align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
                            <td class="text-center align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                            <td class="text-center align-middle"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
                            <td class="text-center align-middle">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td> 
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                    </table>
                </table>
            </div>
            <hr>
            <div class="row no-gutters mt-2">
                <div class="col p-2 text-right">
                    <h4>
                        Total R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

                    </h4>
                    <h4>
                        Frete R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

                    </h4>
                    <h4>
                        Total do Pedido R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

                    </h4>
                </div>
                
            </div>
            <hr>
            <div class="col p-0">
                <div class="col p-0 text-right">
                    <h3 class="text-center">Formas de pagamento</h3>  
                </div>
                <div class="col p-0 text-right">
                </div>
                <div class="col p-0 text-center">
                    <img class="img-fluid" width="400" height="400" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/tema/images/Logo_PagSeguro.png" alt="Logo Pag Seguro">
                    <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}