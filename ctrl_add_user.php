<?php
//importer la connexion à la BDD
    include './utils/connectBdd.php';
    // importer le model
    include './model/model_user.php';
    // importer la view(interface)
    include './HtmlCss/form.html';
    
    if(isset($_POST['valider'])){
    if($_POST["password"] == $_POST["password_confirm"]){
        if(isset($_POST['username'])AND isset($_POST['email'])AND isset($_POST['password'])AND isset($_POST['password_confirm']) AND
  $_POST['username'] != "" AND $_POST['email'] !="" AND
  $_POST['password'] != "" AND
  $_POST['password_confirm'] != ""){
      $mdp = md5($_POST['password']);
      createAccount($bdd, $_POST['username'], $_POST['email'], $mdp);
      echo "le compte à été créer";
  }else{
    echo 'Veuillez remplir les champs du  formulaire';
}
  }else{
   echo "les password ne sont pas identique";
  }
}

?>