<?php
    
    $cat=$_GET["id"];

    require('modele/model.php');
    $posts= getPosts($cat);
    require('vue/nav.php');
