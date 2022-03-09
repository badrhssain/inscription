<?php
require ("inscription.php");


$db= new mysqli("localhost", 'root', '',"gestion_magasin");
           
           $nom = $_POST["nom"];
           $prenom = $_POST["prenom"];
           $adresse = $_POST["adresse"];
           $number = $_POST["number"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $sql = "INSERT INTO client (idClient, nom, prenom, adresse, number, email, password)
            VALUES ( null,'$nom','$prenom','$adresse','$number','$email','$password'
            );";

mysqli_query($db,$sql);
       ?>