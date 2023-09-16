<?php

require_once 'model/stagiaire.php';

function listeStagiairesAction()
{
    $stagiaires = latest();
    require_once 'views/liste_stagiaire.php';
}

function createAction()
{
    require_once 'views/create.php';
}
function storeAction()
{
    create();
    header('location:index.php');
}


function editAction()
{
    $id = $_GET['id'];
    $stagiaire = view($id);
    require_once 'views/edit.php';
} 

function updateAction()
{
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    edit($id,$nom,$prenom,$login,$password);
    header('location:index.php');
}

function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/delete.php';
}
function destroyAction()
{
    $id = $_GET['id'];
    destroy($id);
    header('location:index.php');
}


?>