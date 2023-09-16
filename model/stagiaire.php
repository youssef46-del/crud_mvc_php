<?php


function database_conn(){ 
    return  new PDO('mysql:dbname=societe;host=localhost','root','');
}

function latest(){
    $pdo = database_conn();
    $stagiaires = $pdo->query('SELECT * from stagiaire ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
    return $stagiaires; 
}

function create()
{
    $pdo = database_conn();
    $sqlState = $pdo->prepare("INSERT into stagiaire values(null,?,?,?,?)");
    return $sqlState->execute([$_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['password']]);
}

function edit($id,$nom,$prenom,$login,$password)
{
    $pdo = database_conn();
    $sqlState = $pdo->prepare("UPDATE stagiaire SET nom = ? ,
                                                    prenom = ? ,
                                                    login = ? ,  
                                                    password = ? 
                                                    WHERE id = ? ");
    return $sqlState->execute([$nom, $prenom, $login, $password, $id]);
}

function destroy($id)
{
    $pdo = database_conn();
    $sqlState = $pdo->prepare("DELETE from stagiaire WHERE id = ?");
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = database_conn();
    $sqlState = $pdo->prepare("SELECT * from stagiaire WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}

?>