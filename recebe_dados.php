<?php
//Conexão com o banco de dados
require_once 'configBD.php';

function verificar_entrada($entrada){
    //Filtrando a entrada
    $saida = htmlspecialchars($entrada);
    $saida = stripslashes($saida);
    $saida = trim($saida);
    return $saida;//retorna saída limpa
}

//Teste se existe a ação
if(isset($_POST['action'])){
    if($_POST['action'] = 'cadastro') {
        //Teste se ação é igual a cadastro
        # echo "\n<p>cadastro</p>";
        # echo "\n<pre>";//Pre-formatar
        # print_r($_POST);
        # echo "\n<\pre>";
        //pegando dados do formulário
        $nomeCompleto = verificar_entrada ($_POST['nomeCompleto']);
        $nomeDoUsuario = verificar_entrada ($_POST['nomeDoUsuario']);
        $emailUsuario = verificar_entrada ($_POST['emailUsuario']);
        $senhaDoUsuario = verificar_entrada($_POST['senhaDoUsuario']);
        $senhaUsuarioConfirmar = verificar_entrada($_POST['senhaUsuarioConfirmar']);

        $dataCriado = date("Y-m-d"); //Data atual no formato Banco de dados

        //codificando as senhas
        $senhaCodificada = sha1($senhaDoUsuario);
        $senhaConfirmarCod = sha1($senhaUsuarioConfirmar);
        //Teste de captura de dados
        echo "<p>Nome completo: $nomeCompleto</p>";
        echo "<p>Nome de Usuário: $nomeDoUsuario</p>";
        echo "<p>E-mail: $emailUsuario</p>";
        echo "<p>Senha codificada: $senhaCodificada</p>";
        echo "<p>Data de Criação: $dataCriado</p>";


    }else if($_POST['action'] == 'login'){
        //Senão, teste se ação é login
        echo "\n<p>login</p>";
        echo "\n<pre>"; //Pre-formatar
        print_r($_POST);
        echo "\n<\pre>";
    }else if($_POST['action'] == 'senha'){
        //Senão, teste se ação é recuperar senha
        echo "\n<p>senha</p>";
        echo "\n<pre>"; //Pre-formatar
        print_r($_POST);
        echo "\n<\pre>";
    }else{
        header("location:index.php");
    }
}else{
    //Redirecionando para index.php, negando o acesso
    //a esse arquivo diretamente.
    header("location:index.php");
}