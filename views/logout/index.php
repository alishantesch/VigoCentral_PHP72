<?php

@session_start();

// Limpa as variáveis usadas em toda a aplicação
$_SESSION['ID_CLIENTE'] = NULL;
$_SESSION['CPFCNPJ'] = NULL;
$_SESSION['LOGIN'] = NULL;
$_SESSION['ID_EMPRESA'] = NULL;
$_SESSION['FANTASIA'] = NULL;
$_SESSION['FOTO_EMPRESA'] = NULL;
$_SESSION['CENTRAL_TEMA'] = NULL;
$_SESSION['CENTRAL_TIPO_CONTRATO'] = NULL;
$_SESSION['SISTEMA_MULTA'] = NULL;
$_SESSION['SISTEMA_JUROS'] = NULL;
$_SESSION['CENTRAL_GRAFICO'] = NULL;
$_SESSION['CENTRAL_MOD_SENHA'] = NULL;
$_SESSION['CENTRAL_MOD_FATURAS'] = NULL;
$_SESSION['CENTRAL_MOD_NFS'] = NULL;
$_SESSION['CENTRAL_MOD_SERVICOS'] = NULL;
$_SESSION['CENTRAL_MOD_ACESSOS'] = NULL;
$_SESSION['CENTRAL_MOD_GRAFICOS'] = NULL;
$_SESSION['CENTRAL_MOD_CONTRATOS'] = NULL;
$_SESSION['CENTRAL_MOD_ATENDIMENTOS'] = NULL;
$_SESSION['CENTRAL_MOD_ABRIR_ATENDIMENTO'] = NULL;
$_SESSION['CENTRAL_MOD_MKSENHA'] = NULL;

unset($_SESSION['ID_CLIENTE']);
unset($_SESSION['CPFCNPJ']);
unset($_SESSION['LOGIN']);
unset($_SESSION['ID_EMPRESA']);
unset($_SESSION['FANTASIA']);
unset($_SESSION['FOTO_EMPRESA']);
unset($_SESSION['CENTRAL_TEMA']);
unset($_SESSION['CENTRAL_TIPO_CONTRATO']);
unset($_SESSION['SISTEMA_MULTA']);
unset($_SESSION['SISTEMA_JUROS']);
unset($_SESSION['CENTRAL_GRAFICO']);
unset($_SESSION['CENTRAL_MOD_SENHA']);
unset($_SESSION['CENTRAL_MOD_FATURAS']);
unset($_SESSION['CENTRAL_MOD_NFS']);
unset($_SESSION['CENTRAL_MOD_SERVICOS']);
unset($_SESSION['CENTRAL_MOD_ACESSOS']);
unset($_SESSION['CENTRAL_MOD_GRAFICOS']);
unset($_SESSION['CENTRAL_MOD_CONTRATOS']);
unset($_SESSION['CENTRAL_MOD_ATENDIMENTOS']);
unset($_SESSION['CENTRAL_MOD_ABRIR_ATENDIMENTO']);
unset($_SESSION['CENTRAL_MOD_MKSENHA']);

// Remove todas as variáveis de sessão
@session_unset();

// Destrói a sessão
@session_destroy();

// Redireciona para a página de login
header("Location: login");
?>
