<?php

    function getPosts($cat=""){
    
        $dsn='mysql:dbname=mglsi_news;host=127.0.0.1;port=7979';
        $username='root';
        $pwd='root';
        

        try{

            $bd=new PDO($dsn,$username,$pwd);
            if(strlen($cat)==0){
                $req=$bd->query("SELECT titre, contenu from Article");
            }
            else{
                $req=$bd->query("SELECT titre, contenu from Article where categorie=$cat");
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
