<?php

    function Connexion(){

        $dsn='mysql:dbname=mglsi_news;host=127.0.0.1;port=7979';
        $username='root';
        $pwd='root';  
        $bd=new PDO($dsn,$username,$pwd); 

        return $bd;
    }

    function getPosts($cat=""){
    
        try{

            $bdd=Connexion();
            if(strlen($cat)==0){
                $req=$bdd->query("SELECT titre, contenu from Article");
            }
            else{
                $req=$bdd->query("SELECT titre, contenu from Article where categorie=$cat");
            }

            if($req==false){
                die("Erreur");
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }

        $posts= [];

        while($row=$req->fetch(PDO::FETCH_ASSOC)){
            $post =[
                'title'=>$row['titre'],
                'content'=>$row['contenu'],
            ];

            $posts[] =$post;
        }
        
        return $posts;
    }

    function getCategorie() {

        try{

            $bdd=Connexion();
            $req=$bdd->query("SELECT id, libelle from Categorie");

            if($req==false){
                die("Erreur");
            }
        }catch (PDOException $e){
            echo $e->getMessage();
        }

        $cates=[];

        while($row=$req->fetch(PDO::FETCH_ASSOC)){
            $cate=[
                'id'=>$row['id'],
                'libelles'=>$row['libelle'],
            ];

            $cates[] =$cate;
        }

        return $cates;
    }