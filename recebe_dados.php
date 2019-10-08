<?php
//Teste se existe a ação
if(isset($_POST['action'])){
    if($_POST['action'] = 'cadastro'){
    //Teste se ação é igual a cadastro
    echo "\n<p>cadastro</p>";
    echo "\n<pre>"; //Pre-Formatar
    print_r($_POST);
    echo "\n</pre>";
}else if($_POST['action'] = 'login'){
//Senão, teste se ação é login

}else if($_POST['action'] = 'senha'){
//Senão, teste se ação é recuperar senha

}else{
    header("location:index.php");
}

}else{
    //Redirecionando para index.php, negando o acesso
    //a esse arquivo diretamente.
    header("location:index.php");
}