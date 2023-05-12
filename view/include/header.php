<?php

$articleMenu = getCategoryMenu($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/leStyle.css" rel="stylesheet" type="text/css" />

    <!-- On mettra le title dans une variable $title a renseigner en haut de chaque vue ex: $title = accueil  -->
    <title>C•Ͻ - <?= $title ?></title>
    
  
    <header class="main-head">
  <img src="asset/img/logo.jpg" alt="" id="logo">
    <nav>
        <a class="menu" href="?p=homePage">Accueil</a>
        
        <!-- lien pour les category : -->
        <?php
        foreach($articleMenu as $item) : 
        ?>

        <a class="menu" href="?categoryId=<?=$item['id_category']?>"><?=$item['name_category']?></a>

        <?php
        endforeach;
        ?>
        <a class="menu" href="?p=contact">Contact</a>
        <a class="menu" href="?p=connect">Connexion</a>
       

    </nav>
