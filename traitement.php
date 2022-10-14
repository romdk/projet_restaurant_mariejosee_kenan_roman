<?php

session_start() ;
$action = $_GET["action"];
$index = (isset($_GET["index"])) ? $_GET["index"] : "";

switch($action) {

    case"ajouterReservation";

    
    if(isset($_POST['envoyer'])){
        $name = $_POST['name'];
        $nbPersonne = $_POST['nbPersonne'];
        $jour = $_POST['jour'];
        $heure = $_POST['heure'];
        $creneau = $_POST['creneau'];
        $message = $_POST['message'];
        $email = $_POST['email'];

        // $name =filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING);
        // $nbPersonne =filter_input(INPUT_POST,"nbpersonne",FILTER_VALIDATE_INT,FILTER_FLAG_ALLOW_FRACTION);
        // $message =filter_input(INPUT_POST,"message",FILTER_SANITIZE_STRING);
        // $email=filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        if($name && $nbPersonne && $jour && $heure && $creneau && $email ){
            $reservation =[
                "name" => $name ,
                "nbPersonne"=>$nbPersonne ,
                "jour"=>$jour,
                "heure"=>$heure,
                "creneau"=>$creneau,
                "email"=>$email,
                "message"=>$message ];

        $_SESSION['reservations'][]=$reservation;
        }
        header("Location:panier.php");
        

    }
    break;

    case "effacerReservations";
    unset($_SESSION['reservations']);
    header("Location:panier.php");
    break;

    case "supprimerUneReservation":
        unset($_SESSION["reservations"][$index]);
        header("Location:panier.php");
     break;
}

?>