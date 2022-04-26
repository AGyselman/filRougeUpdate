<?php
    // fonction qui ajoute un utilisateur en BDD(utilisateurs)
    function createAccount($bdd, $nom, $mail , $mdp){
        try{
            $req = $bdd->prepare('INSERT INTO user(name_user, mail_user, mdp_user) 
            VALUES(:name_user, :mail_user, :mdp_user)');
            $req->execute(array(
                'name_user' => $nom,
                'mail_user' =>$mail,
                'mdp_user' =>$mdp
                ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
