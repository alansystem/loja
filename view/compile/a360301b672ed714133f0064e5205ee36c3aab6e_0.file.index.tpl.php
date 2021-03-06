<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-20 15:18:30
  from 'C:\xampp\htdocs\loja\loja\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5dd54b36aed4b8_86057720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a360301b672ed714133f0064e5205ee36c3aab6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\loja\\view\\index.tpl',
      1 => 1574192417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd54b36aed4b8_86057720 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--FavIcon-->
    <link rel="shortcut icon" href="#" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--JQuery-->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-3.4.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/script.js" type="text/javascript"><?php echo '</script'; ?>
>

    <!--CSS-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/estilo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/normalize.css" type="text/css">
    

    <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

    <!--Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Font Awesome-->
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/3e1cd9c3d7.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
</head>

<body>
    
    <!--Container Principal-->
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col">
                <div class="jumbotron jumbotron-fluid m-0">
                    <div class="container">
                        <h1 class="display-6">Loja Carvalho</h1>
                        <p class="lead">Este é um jumbotron modificado que ocupa todo o espaço horizontal de seu
                            elemento
                            pai.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-gutters text-right" style="border-bottom: 2px solid black;">
            <div class="col d-flex py-3 justify-content-end">
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Pesquisar produtos"
                        aria-label="Pesquisar produtos">
                    <span id="iconPesquisar">
                        <a href="#"><i class="fas fa-search"></i></a>
                    </span>
                </form>
            </div>
            
            <div class="col py-3 pr-2">
                <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                    Olá <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="ml-2 btn btn-outline-danger btn-sm"><i class="fas fa-sign-in-alt mr-2"></i> Sair </a> 
                <?php } else { ?>
                <!--Login-->
                <span style="font-size: 18px;">
                <i class="fas fa-user"></i>
                <span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="btn btn-success btn-sm" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt mr-2 text-light"></i>Login</a>
                <?php }?>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col p-0">
                <!--Menu-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="menu">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado"
                        aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
"><i class="fas fa-home mr-2"></i>Home<span class="sr-only">(página atual)</span></a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"><i class="fas fa-user-edit mr-2"></i>Minha Conta</a>
                            </li>
                            <?php }?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"><i class="fas fa-tag mr-2"></i>Produtos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Categorias</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Todos</a>
                                    <div class="dropdown-divider"></div>

                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                             </li>
                            <li class="nav-item">
                                <a class="nav-link text-right" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"><i class="fas fa-shopping-cart mr-2"></i>Carrinho</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
"><i class="fas fa-envelope mr-2"></i>Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
"></i>Sobre</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <!--Spinner-->
                <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 p-0">
                <!-- Rotas das páginas -->
                    <?php 
                        Rotas::get_Pagina();
                    ?>
                </div>
            </div>
        </div>
        <!--Rodapé-->
        <div class="row no-gutters align-items-center">
            <div class="col-12 text-center" style="padding-top: 30px; background-color: #B6FFA9;">
                <span class="h3"><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</span>
                <p> &copy; Todos os Direitos Reservados - Ronaldo Carvalho</p>
                <p>2019</p>
            </div>
        </div>
        
        <!--End container -->
    </div>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
