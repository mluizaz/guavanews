<?php
$emailsDb = new SQLite3( "livros.emailsDb");
$emailsDb ->exec ('CREATE TABLE IF NOT EXISTS livros(email TEXT)');

$nomesDb = new SQLite3( "livros.nomesDb");
$nomesDb ->exec ('CREATE TABLE IF NOT EXISTS livros(nome TEXT)');

$senhasDb = new SQLite3( "livros.senhasDb");
$senhasDb ->exec ('CREATE TABLE IF NOT EXISTS livros(senha TEXT)');

echo('    
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Página Inicial</title>
    </head>
');

if (empty($_POST['E-mailCad'])||empty($_POST['Nome'])||empty($_POST['SenhaCad'])){
    include __DIR__.'/erro.php'; 
    exit();
}else{
    $emailsDb->exec("INSERT INTO livros(email) values ('".$_POST['E-mailCad']. "')");
    $nomesDb->exec("INSERT INTO livros(nome) values ('".$_POST['Nome']. "')");
    $senhasDb->exec("INSERT INTO livros(senha) values ('".$_POST['SenhaCad']. "')");

    echo'<div id="teto">
    <h1>Cadastro realizado com sucesso!</h1>
    </div>
    <br>';    
}
$i=$emailsDb->query("SELECT email FROM livros");
$j=$nomesDb->query("SELECT nome FROM livros");

echo ('<div id="container_cad">');
echo('<div>');
while($nomesDb = $j->fetchArray()){
    echo("Usuário: ".$nomesDb['nome']."<br>");
}
echo("</div>");

echo('<div>');
while($emailsDb = $i->fetchArray()){
    echo("Email: ".$emailsDb['email']."<br>");
}
echo("</div>");
echo ('</div>');
