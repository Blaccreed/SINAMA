<?php


if(!empty($_POST)) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motdepasse= $_POST['motdepasse'];
    $type = "c";
    if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($motdepasse) && !empty($type)) {
        $con= mysqli_connect("localhost", "root", "root", "sinama");

        if($con) {
            $req = "    INSERT INTO user(nom,prenom,email,motdepasse,type)
                    VALUES('$nom', '$prenom', '$email','$motdepasse','$type')";
                $res = mysqli_query($con, $req);

        }
    }
    header("Location: pageaccueilsinama.php");
} else {
    echo "Une erreur est survenue, veuillez réessayer ultérieurement.";
}
?>
