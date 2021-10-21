<?php 

    function inscription(){
        $nom = isset($_POST['nom'])?($_POST['nom']):'';
        $prenom = isset($_POST['prenom'])?($_POST['prenom']):'';
        $mot="";

        if (count($_POST)==0){
            // appel du tpl
        }
        else{
            $profil = array();
            $inscrit = array();
        }

    }

?>